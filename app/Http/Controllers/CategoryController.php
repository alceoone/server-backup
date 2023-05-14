<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\AppDetail;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
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
        $data = Category::select('categories_id','app_id','title','image')->where('user_app_id', $this->fillAuth())->get();
        if ($request->ajax()) {
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="'.route('application.edit', $row->app_id).'" class="btn btn-warning btn-sm">Edit</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('pages.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $dataApps = AppDetail::where('user_app_id', $this->fillAuth())->get();
        return view('pages.category.create', compact('dataApps'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'apps'     => 'required',
            'title'     => 'required|min:3',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/category', $image->hashName());


        //create post
        Category::create([
            'user_app_id' => $this->fillAuth(),
            'app_id' => $request->apps,
            'title' => $request->title,
            'image' => $image->hashName(),
        ]);

        //redirect to index
        return redirect()->route('category.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
