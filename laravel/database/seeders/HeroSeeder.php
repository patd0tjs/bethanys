<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hero')->insert([
            'link'       => 'web/hero.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
