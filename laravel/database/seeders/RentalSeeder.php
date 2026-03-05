<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i <= 21; $i++)
        {
            DB::table('rentals')->insert([
                'link'       => 'web/rentals/'.$i.'.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
