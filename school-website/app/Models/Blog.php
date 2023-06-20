<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable=[
      'title',
      'image',
      'description',
      'category_id'
    ];

    function category()
    {
        return $this->hasOne(Category::class);
    }
}
