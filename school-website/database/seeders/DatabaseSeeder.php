<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
             'username' => 'admin',
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
    }
}
