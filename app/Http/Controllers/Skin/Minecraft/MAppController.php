<?php

namespace App\Http\Controllers\Skin\Minecraft;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MAppController extends Controller
{
    public function index()
    {
        $type_menu = 'application-skin';
        return view('pages.minecraft.application.index', compact(['type_menu']));
    }
}
