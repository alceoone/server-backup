<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppDetail;

class PrivacyPolicyController extends Controller
{
    
    public function index($appKey) {
        $data = AppDetail::where('subKey', $appKey)->get()->first();
        return view('pages.privacy-policy.index', compact('data'));
    }
}
