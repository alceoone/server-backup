<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'categories_id';

    protected $fillable = [
        'app_id',
        'user_app_id',
        'title',
        'image'
    ];
}
