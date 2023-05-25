<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'app_id',
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
