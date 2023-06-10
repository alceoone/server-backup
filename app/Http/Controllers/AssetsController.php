<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppDetail;
use App\Models\Category;
use App\Models\Image;
use App\Models\ImageCategory;
use Illuminate\Support\Facades\Auth;


class AssetsController extends Controller
{
    public static function quickRandom($length = 24)
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $data = ImageCategory::select('app_id','images_id','categories_id')->get();
        // if ($request->ajax()) {
        //     return Datatables::of($data)->addIndexColumn()
        //         ->addColumn('action', function($row){
        //             $btn = '<a href="'.route('application.edit', $row->app_id).'" class="btn btn-warning btn-sm">Edit</a>';
        //             return $btn;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }

        // return view('pages.content.index');
        // return redirect('/some-page');
        return redirect()->route('assets.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataApp = AppDetail::where('user_app_id', $this->fillAuth())->get();
        $dataCategory = Category::where('user_app_id', $this->fillAuth())->get();
        $type_menu = 'application-wallpaper';
        return view('pages.content.create', compact('dataCategory', 'dataApp', 'type_menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return $request;
        $this->validate($request, [
            'application' => 'required',
            'title' => 'required',
            'category' => 'required',
            'filenames' => 'required',
            'filenames.*' => 'required'
        ]);

        if($request->hasfile('filenames'))
        {
            foreach($request->file('filenames') as $file)
            {
                $name = $this->quickRandom().time().rand(1,10).'.'.$file->extension();
                $file->storeAs('public/wallpaper', $name);
                $dataImage = Image::create([
                    'title' => $request->title,
                    'image_name' => $name,
                    'folder' => 'wallpaper',
                    'type' => $file->extension(),
                    'size' => 1,
                ]);
                // return $dataImage;
                ImageCategory::create([
                    'app_id' => $request->application,
                    'images_id' => $dataImage->id,
                    'categories_id' => $request->category
                ]);
            }
        }

        
        return redirect()->route('application.show', $request->application);
        // return view('pages.content.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
