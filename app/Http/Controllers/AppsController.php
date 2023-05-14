<?php

namespace App\Http\Controllers;

use App\Models\AppDetail;
use App\Models\ImageCategory;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Auth;

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

        $data = AppDetail::select('app_id','user_app_id','image_icon','title','package','key')->where('user_app_id', $this->fillAuth())->get();
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
        return view('pages.application.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.application.create');
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
            'status' => 'active'
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
        return view('pages.application.show', compact('appContent'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appdetail = AppDetail::where('app_id', $id)->get()->first();
        return view('pages.application.edit', compact('appdetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
