<?php

namespace App\Http\Controllers\Skin\Minecraft;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AppMinecraft;
class MAssetsController extends Controller
{
    public function index(){
        
        $dataApps = AppMinecraft::get();
        $type_menu = 'application-skin-assets';
        
        return view('pages.minecraft.assets.index', compact(['type_menu', 'dataApps']));
    }
}
