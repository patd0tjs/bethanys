<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i <= 21; $i++)
        {
            DB::table('works')->insert([
                'link'       => 'web/works/'.$i.'.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
