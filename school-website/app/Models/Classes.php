<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $fillable=[
        'number',
        'name',
        'teacher_id',
        'images',
        'description'
    ];

    function teacher()
    {
        return $this->hasOne(Teacher::class);
    }
}
