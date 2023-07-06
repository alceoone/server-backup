<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppMinecraft extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_app_id',
        'title',
        'deskripsi',
        'package',
        'key',
        'image_icon',
        'subKey',
        'privacy_policy',
        'status'
    ];
}
