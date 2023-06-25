<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::insert([
            'name'=>'1-maktab',
            'image'=>'20492370.jpg',
            'description'=>'Maktab haqida yozing',
            'phone_number'=>'999999999',
            'start_time'=>'08:00',
            'end_time'=>'13:00',
            'viloyat'=>'Viloyatni yozing',
            'tuman'=>'Tumanni yozing',
            'facebook'=>'Majburiy emas',
            'instagram'=>'Majburiy emas',
        ]);
    }
}
