<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'teacher_id',
        'description',
        'image',
        'start_time',
        'end_time',
        'price',
    ];

    function weeks()
    {
     return $this->belongsToMany(week::class);
    }

    function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

   public function count()
    {
        return count(Course::all()->ToArray());
    }
}
