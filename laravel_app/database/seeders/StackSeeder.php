<?php

namespace Database\Seeders;

use App\Models\Stack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stack::create(['text' => 'HTML5']);
        Stack::create(['text' => 'CSS3']);
        Stack::create(['text' => 'JavaScript']);
        Stack::create(['text' => 'PHP']);
        Stack::create(['text' => 'Docker']);
    }
}
