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
            ['firstname'=>"jeny",'lastname'=>"jenies",'category'=>'matematika','image'=>'20492370.jpg'],
            ['firstname'=>"jeny1",'lastname'=>"jenies1",'category'=>'inglis tili','image'=>'20492370.jpg'],
            ['firstname'=>"jeny2",'lastname'=>"jenies2",'category'=>'rus tili','image'=>'20492370.jpg'],
            ['firstname'=>"jeny3",'lastname'=>"jenies3",'category'=>'ona tili','image'=>'20492370.jpg'],
            ['firstname'=>"jeny4",'lastname'=>"jenies4",'category'=>'fizika','image'=>'20492370.jpg'],
        ]);
    }
}
