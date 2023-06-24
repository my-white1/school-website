<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::insert([
            ['title'=>'jnknln','image'=>'','description'=>'bcsdcjdslcsdbjsdbsdjl','category_id'=>1],
            ['title'=>'jnknlnaf','image'=>'','description'=>'bcsdcjdslcsdbjsdbsdjl','category_id'=>2],
            ['title'=>'jnknlnaf','image'=>'','description'=>'bcsdcjdslcsdbjsdbsdjl','category_id'=>3],
            ['title'=>'jnknlnweaf','image'=>'','description'=>'bcsdcjdslcsdbjsdbsdjl','category_id'=>4],
            ['title'=>'jnknlnweafewfe','image'=>'','description'=>'bcsdcjdslcsdbjsdbsdjl','category_id'=>1],
        ]);
    }
}
