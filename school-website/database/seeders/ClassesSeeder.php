<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classes::insert([
            ['number'=>"1",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa"],
            ['number'=>"1",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa"],
            ['number'=>"2",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa"],
            ['number'=>"2",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa"],
            ['number'=>"3",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa"],
            ['number'=>"3",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa"],
            ['number'=>"4",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa"],
            ['number'=>"4",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa"],
            ['number'=>"5",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa"],
            ['number'=>"5",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa"],
            ['number'=>"6",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa"],
            ['number'=>"6",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa"],
            ['number'=>"7",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa"],
            ['number'=>"7",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa"],
            ['number'=>"8",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa"],
            ['number'=>"8",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa"],
            ['number'=>"9",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa"],
            ['number'=>"9",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa"],
            ['number'=>"10",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa"],
            ['number'=>"10",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa"],
            ['number'=>"11",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa"],
            ['number'=>"11",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa"],
        ]);
    }
}
