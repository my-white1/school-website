<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::insert([
            ['firstname'=>"jeny",'lastname'=>"jenies",'category'=>'matematika','image'=>''],
            ['firstname'=>"jeny1",'lastname'=>"jenies1",'category'=>'inglis tili','image'=>''],
            ['firstname'=>"jeny2",'lastname'=>"jenies2",'category'=>'rus tili','image'=>''],
            ['firstname'=>"jeny3",'lastname'=>"jenies3",'category'=>'ona tili','image'=>''],
            ['firstname'=>"jeny4",'lastname'=>"jenies4",'category'=>'fizika','image'=>''],
        ]);
    }
}
