<?php

namespace App\Http\Controllers\Device;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CekDevice;

class CekDeviceController extends Controller
{
    public function cek($device){
        $data = CekDevice::where('id_device', $device)->first();
        // return $data;
        // $device == '8dcc0a946fac72a5';
        if($data){
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
