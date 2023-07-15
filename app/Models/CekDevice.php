<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CekDevice extends Model
{
    use HasFactory;
    

    protected $primaryKey = 'categories_id';

    protected $fillable = [
        'nama',
        'id_device',
    ];
}
