<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'type_id',
        'teacher_id'
    ];

    const TYPES = [
        '1' => 'oliy malumotli',
        '2' => 'O`rta maluotli',
        '3' => 'yangi'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

}
