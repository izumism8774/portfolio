<?php

namespace Database\Seeders;

use App\Models\Tags;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tags::create(['text' => 'React']);
        Tags::create(['text' => 'Laravel']);
        Tags::create(['text' => 'TypeScript']);
        Tags::create(['text' => 'Vue.js']);
        Tags::create(['text' => 'MySQL']);
    }
}
