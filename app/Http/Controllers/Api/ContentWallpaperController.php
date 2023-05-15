<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AppDetail;
use App\Models\ImageCategory;
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
                ->paginate(20);
                // ->get();
            return response()->json($appContent->items(), 200, ['Content-Type' => 'application/json;charset=UTF-8']);
        } else {
            return response()->json(['error' => 'Data not found'], 404);
        }
        return $cek;
    }
}
