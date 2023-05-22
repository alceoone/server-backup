<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AppDetail;
use App\Models\ImageCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class ContentWallpaperController extends Controller
{
    public function index($key){
        $cek = AppDetail::where('key', '=', $key)->exists();
        
        if($cek) {
            $data = AppDetail::where('key', '=', $key)->first();
            $appContent = ImageCategory::
                leftjoin('images', 'image_categories.images_id', '=', 'images.images_id')
                ->select(
                    'image_categories.app_id',
                    'image_categories.images_id',
                    'images.title',
                    'images.image_name',
                    'images.folder',
                    \DB::raw('CONCAT("'.env('APP_URL').'","/storage/",images.folder,"/",images.image_name) AS image')
                    // \DB::raw('CONCAT("https://cf12-182-2-47-40.ngrok-free.app","/storage/",images.folder,"/",images.image_name) AS image')
                    ) 
                ->where('image_categories.app_id', '=', $data->app_id)
                ->paginate(10);
                // ->get();
            return response()->json($appContent->items(), 200, ['Content-Type' => 'application/json;charset=UTF-8']);
        } else {
            return response()->json(['error' => 'Data not found'], 404);
        }
        return response()->json(['error' => 'Data not found'], 404);
    }

    public function new($key){
        $cek = AppDetail::where('key', '=', $key)->exists();
        
        if($cek) {
            $data = AppDetail::where('key', '=', $key)->first();
            $appContent = ImageCategory::
                leftjoin('images', 'image_categories.images_id', '=', 'images.images_id')
                ->select(
                    'image_categories.app_id',
                    'image_categories.images_id',
                    'images.title',
                    'images.image_name',
                    'images.folder',
                    \DB::raw('CONCAT("'.env('APP_URL').'","/storage/",images.folder,"/",images.image_name) AS image'),
                    'image_categories.created_at'
                    ) 
                ->where('image_categories.app_id', '=', $data->app_id)
                ->orderByDesc('image_categories.created_at')->take(31)->get();
            return response()->json($appContent, 200, ['Content-Type' => 'application/json;charset=UTF-8']);
        } else {
            return response()->json(['error' => 'Data not found'], 404);
        }
        return response()->json(['error' => 'Data not found'], 404);
    }

    public function category($key){
        $cek = AppDetail::where('key', '=', $key)->exists();
        if($cek) {
            $data = AppDetail::where('key', '=', $key)->first();
            $dataCategory = Category::where('app_id', '=', $data->app_id)
                ->select(
                    'categories_id',
                    'title',
                    \DB::raw('CONCAT("'.env('APP_URL').'","/storage/category/", image) AS image')
            )->get();
            return response()->json($dataCategory, 200, ['Content-Type' => 'application/json;charset=UTF-8']);
        } else {
            return response()->json(['error' => 'Data not found'], 404);
        }
    }

    public function categoryId($key, $id){
        
        $cek = AppDetail::where('key', '=', $key)->exists();
        
        if($cek) {
            $data = AppDetail::where('key', '=', $key)->first();
            $appContent = ImageCategory::
                leftjoin('images', 'image_categories.images_id', '=', 'images.images_id')
                ->select(
                    'image_categories.app_id',
                    'image_categories.images_id',
                    'images.title',
                    'images.image_name',
                    'images.folder',
                    \DB::raw('CONCAT("'.env('APP_URL').'","/storage/",images.folder,"/",images.image_name) AS image')
                    // \DB::raw('CONCAT("https://cf12-182-2-47-40.ngrok-free.app","/storage/",images.folder,"/",images.image_name) AS image')
                    ) 
                ->where('image_categories.app_id', '=', $data->app_id)
                ->where('image_categories.categories_id', '=', $id)
                ->paginate(10);
                // ->get();
            return response()->json($appContent->items(), 200, ['Content-Type' => 'application/json;charset=UTF-8']);
        } else {
            return response()->json(['error' => 'Data not found'], 404);
        }
        return response()->json(['error' => 'Data not found'], 404);

    }

}
