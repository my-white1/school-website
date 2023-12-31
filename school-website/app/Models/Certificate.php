<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certificate extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable=[
        'type',
        'degree',
        'ball',
        'student_id',
    ];

    public function students()
    {
        return $this->belongsTo(Student::class);
    }
}
