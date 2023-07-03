<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable=[
        'fullname',
        'class_id',
        'school_id'
    ];
    const TYPES=[
        '1'=>'IELTS',
        '2'=>'CEFR'
    ];
    const DEGREE=[
        '1'=>'B1',
        '2'=>'B2',
        '3'=>'C1'
    ];
    public function about()
    {
        return $this->belongsTo(About::class);
    }

    public function certificate()
    {
        return $this->hasOne(Certificate::class);
    }

    public function class()
    {
        return $this->belongsTo(Classes::class);       
    }
}
