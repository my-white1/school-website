<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'phone_number',
        'start_time',
        'end_time',
        'viloyat',
        'tuman',
        'facebook',
        'instagram',
    ];


}
