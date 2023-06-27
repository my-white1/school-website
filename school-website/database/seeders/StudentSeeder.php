<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::insert([
            ['firstname'=>'Tomy','lastname'=>'Karel1','class_id'=>2,'school_id'=>1],
            ['firstname'=>'Tomy1','lastname'=>'Karel2','class_id'=>4,'school_id'=>1],
            ['firstname'=>'Tomy2','lastname'=>'Karel3','class_id'=>5,'school_id'=>1],
            ['firstname'=>'Tomy3','lastname'=>'Karel4','class_id'=>6,'school_id'=>1],
            ['firstname'=>'Tomy4','lastname'=>'Karel5','class_id'=>2,'school_id'=>1],
            ['firstname'=>'Tomy5','lastname'=>'Karel6','class_id'=>3,'school_id'=>1],
            ['firstname'=>'Tomy6','lastname'=>'Karel7','class_id'=>2,'school_id'=>1],
            ['firstname'=>'Tomy7','lastname'=>'Karel8','class_id'=>5,'school_id'=>1],
        ]);
    }
}
