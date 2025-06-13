<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Unit::insert([
            ['name' => 'Tablet'],
            ['name' => 'Botol'],
            ['name' => 'Kaplet'],
        ]);
    }
    
}