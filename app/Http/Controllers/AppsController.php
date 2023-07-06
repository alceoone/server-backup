<?php

namespace App\Http\Controllers;

use App\Models\AppDetail;
use App\Models\ImageCategory;
use App\Models\Image;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class AppsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public static function quickRandom($length = 32)
    {
         $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
     
         return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }

    public static function quickRandomappKey($length = 8)
    {
         $pool = '0123456789abcdefghijklmnopqrstuvwxyz';
     
         return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }

    public static function fillAuth()
    {
        $dataUser = Auth::user();
        
        if(!$dataUser){
            return redirect('/');
        } else {
            return $fil = $dataUser->user_app_id;
        }
    }

    public function index(Request $request)
    {

        $data = AppDetail::select('app_id','user_app_id','image_icon','subKey','title','package','key')->where('user_app_id', $this->fillAuth())->get();
        if ($request->ajax()) {
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="'.route('application.edit', $row->app_id).'" class="btn btn-warning btn-sm">Edit</a>';
                    $btnDetail = '<a href="'.route('application.show', $row->app_id).'" class="btn btn-success btn-sm">Detail</a>';
                    $btnAll = $btn. $btnDetail;
                    return $btnAll;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $type_menu = 'application-wallpaper';
        return view('pages.application.index', compact(['type_menu']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_menu = 'application-wallpaper';
        return view('pages.application.create', compact(['type_menu']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $dataUser = Auth::user();
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10',
            'package'   => 'required|min:3',
            'privacy_policy' => 'required',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/application', $image->hashName());

        //create post
        AppDetail::create([
            'user_app_id' => $dataUser->user_app_id,
            'image_icon' => $image->hashName(),
            'title' => $request->title,
            'deskripsi' => $request->content,
            'package' => $request->package,
            'key' => $this->quickRandom(),
            'status' => 'active',
            'subKey' => $this->quickRandomappKey(),
            'privacy_policy' => $request->privacy_policy,
        ]);

        //redirect to index
        return redirect()->route('application.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appContent = ImageCategory::
                leftjoin('images', 'image_categories.images_id', '=', 'images.images_id')
                ->select(
                    'image_categories.app_id',
                    'image_categories.images_id',
                    'images.title',
                    'images.image_name',
                    'images.folder'
                    ) 
                ->where('image_categories.app_id', '=', $id)   
                ->paginate(5);
        // return $appContent;
        
        $type_menu = 'application-wallpaper';
        return view('pages.application.show', compact('appContent', 'type_menu'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type_menu = 'application-wallpaper';
        $appdetail = AppDetail::where('app_id', $id)->get()->first();
        return view('pages.application.edit', compact('appdetail', 'type_menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AppDetail $appdetail, $id)
    {
        $dataApp = $appdetail->where('app_id', $id)->first();
        return $dataApp;

        $this->validate($request, [
            'title'     => 'required|min:5',
            'content'   => 'required|min:10',
            'package'   => 'required|min:3',
            'privacy_policy' => 'required',
        ]);

        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/application', $image->hashName());
    

            //delete old image
            Storage::delete('public/application/'.$dataApp->image_icon);

            //update promo with new image
            $dataApp->update([
                'image_icon' => $image->hashName(),
                'title' => $request->title,
                'deskripsi' => $request->content,
                'package' => $request->package,
                'privacy_policy' => $request->privacy_policy,
            ]);

        } else {

            $dataApp->update([
                'title' => $request->title,
                'deskripsi' => $request->content,
                'package' => $request->package,
                'privacy_policy' => $request->privacy_policy,
            ]);
        }

        if(!$dataApp->subKey) {
            $dataApp->update([
                'subKey' => $this->quickRandomappKey(),
            ]);
        }

        
        return redirect()->route('application.index')->with(['success' => 'Data Berhasil Diubah!']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imageData = Image::where('images_id', $id)->get()->first();
        $imageCategory = ImageCategory::where('images_id', $id)->get()->first();
        $exists =  Storage::disk('public')->exists('wallpaper/' . $imageData->image_name);
            if ($exists) {
                Storage::delete('public/wallpaper/'. $imageData->image_name);
                Image::where('images_id', $id)->delete();
                ImageCategory::where('images_id', $id)->delete();
            return Redirect::back()->with('message', 'Data berhasil dihapus');
            } else {
                $data = Image::where('images_id', $id)->get()->first();
                if(!$data) {
                    Image::where('images_id', $id)->delete();
                    ImageCategory::where('images_id', $id)->delete();
                } else{
                    ImageCategory::where('images_id', $id)->delete();
                }
            return Redirect::back()->with('message', 'Data berhasil dihapus');
        }
    }
}
