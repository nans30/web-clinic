<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Category::insert([
            ['name' => 'Antibiotik'],
            ['name' => 'Analgesik'],
            ['name' => 'Vitamin'],
        ]);
    }
    
}