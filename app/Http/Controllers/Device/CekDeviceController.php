<?php

namespace App\Http\Controllers\Device;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CekDeviceController extends Controller
{
    public function cek($device){
        if($device == '8dcc0a946fac72a5'){
            return response()->json(
                ['success' => true],
                200, ['Content-Type' => 'application/json;charset=UTF-8']);
            // return "benar";
        } else {
            return response()->json(
                ['success' => false],
                404, ['Content-Type' => 'application/json;charset=UTF-8']);
            
        }
    }
}
