<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Course;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::create([
             'name' => 'Admin',
             'email' => 'admin@admin.com',
             'password'=>bcrypt('password')
         ]);

         $this->call([
             CategorySeeder::class,
             WeekSeeder::class,
             AboutSeeder::class,
             TeacherSeeder::class,
             ClassesSeeder::class,
             CourseSeeder::class,
             BlogSeeder::class,
         ]);
        foreach (Course::all() as $k=>$c) {
            if ($k%2==0){
                $c->weeks()->sync([1,3,5]);
            }else{
                $c->weeks()->sync([2,4,6]);
            }
        }
    }
}
