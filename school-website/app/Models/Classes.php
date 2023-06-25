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
        'image',
        'description'
    ];

    function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
