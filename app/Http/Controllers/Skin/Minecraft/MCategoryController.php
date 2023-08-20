<?php

namespace App\Http\Controllers\Skin\Minecraft;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AppMinecraft;
use App\Models\CategoryMinecraft;

class MCategoryController extends Controller
{
    public function index(){
        $type_menu = 'application-skin-category';
        return view('pages.minecraft.category.index', compact(['type_menu']));
    }
    public function create(){
        $dataApps = AppMinecraft::get();
        $type_menu = 'application-skin-category';
        return view('pages.minecraft.category.create', compact(['type_menu', 'dataApps']));
    }
}
