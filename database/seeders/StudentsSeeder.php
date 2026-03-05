<?php

namespace Database\Seeders;

use App\Models\Students;
use Database\Factories\StudentsFactory as Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Students::truncate();
        for ($i=0; $i < 1000; $i++) { 
            Students::create((new Factory)->definition());
        }  
    }
}
