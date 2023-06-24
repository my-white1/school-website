<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable=[
        'firstname',
        'lastname',
        'category',
        'image'
    ];

    public function classes()
    {
        return $this->hasOne(Classes::class);
    }
}
