<?php

namespace App\Http\Controllers\Skin\Minecraft;

use App\Models\AppMinecraft;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class MAppController extends Controller
{
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
        $data = AppMinecraft::select('app_id','user_app_id','image_icon','subKey','title','package','key')->where('user_app_id', $this->fillAuth())->get();
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
        
        $type_menu = 'application-skin';
        return view('pages.minecraft.application.index', compact(['type_menu']));
    }
    public function create()
    {
        $type_menu = 'application-skin';
        return view('pages.minecraft.application.create', compact(['type_menu']));
    }
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
        $image->storeAs('public/application/minecraft', $image->hashName());

        //create post
        AppMinecraft::create([
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
        return redirect()->route('minecraft.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

}
