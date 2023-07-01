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
//            ['number'=>"1",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>1],
//            ['number'=>"1",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>1],
//            ['number'=>"2",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>1],
//            ['number'=>"2",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>1],
//            ['number'=>"3",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>1],
//            ['number'=>"3",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>1],
//            ['number'=>"4",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>1],
//            ['number'=>"4",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>1],
//            ['number'=>"5",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>1],
//            ['number'=>"5",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>1],
//            ['number'=>"6",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>1],
//            ['number'=>"6",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>1],
//            ['number'=>"7",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>1],
//            ['number'=>"7",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>1],
//            ['number'=>"8",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>1],
//            ['number'=>"8",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>1],
//            ['number'=>"9",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>1],
//            ['number'=>"9",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>1],
//            ['number'=>"10",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>1],
//            ['number'=>"10",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>1],
//            ['number'=>"11",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>1],
//            ['number'=>"11",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>1],
            ['number'=>"1",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>2],
            ['number'=>"1",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>2],
            ['number'=>"2",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>2],
            ['number'=>"2",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>2],
            ['number'=>"3",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>2],
            ['number'=>"3",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>2],
            ['number'=>"4",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>2],
            ['number'=>"4",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>2],
            ['number'=>"5",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>2],
            ['number'=>"5",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>2],
            ['number'=>"6",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>2],
            ['number'=>"6",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>2],
            ['number'=>"7",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>2],
            ['number'=>"7",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>2],
            ['number'=>"8",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>2],
            ['number'=>"8",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>2],
            ['number'=>"9",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>2],
            ['number'=>"9",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>2],
            ['number'=>"10",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>2],
            ['number'=>"10",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>2],
            ['number'=>"11",'name'=>"A",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>2],
            ['number'=>"11",'name'=>"B",'teacher_id'=>1,'image'=>'class.jpeg','created_at'=>'2023-06-26 15:33:47','description'=>"sfskfelfkfielkfewjaifnlewmfeklnwa",'school_id'=>2],
        ]);
    }
}
