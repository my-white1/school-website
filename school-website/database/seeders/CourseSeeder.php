<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::insert([
            ['name'=>'matem','image'=>'','start_time'=>'08:00','end_time'=>'10:00','teacher_id'=>'1','description'=>'dhbsfjsfbskjflsaflhslfhlshflsjfljkasblkj'],
            ['name'=>'inglis tili','image'=>'','start_time'=>'10:00','end_time'=>'12:00','teacher_id'=>'1','description'=>'dhbsfjsfbskjflsaflhslfhlshflsjfljkasblkj'],
            ['name'=>'rus tili','image'=>'','start_time'=>'12:00','end_time'=>'14:00','teacher_id'=>'1','description'=>'dhbsfjsfbskjflsaflhslfhlshflsjfljkasblkj'],
            ['name'=>'ona tili','image'=>'','start_time'=>'14:00','end_time'=>'16:00','teacher_id'=>'1','description'=>'dhbsfjsfbskjflsaflhslfhlshflsjfljkasblkj'],
            ['name'=>'fizika','image'=>'','start_time'=>'16:00','end_time'=>'18:00','teacher_id'=>'1','description'=>'dhbsfjsfbskjflsaflhslfhlshflsjfljkasblkj'],
        ]);
    }
}
