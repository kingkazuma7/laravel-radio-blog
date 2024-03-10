<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpisodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            DB::table('episodes')->insert([
                'program_id' => 1,
                'title' => 'エピソード1',
                'description' => 'これはエピソード1の説明です。',
                'broadcasted_at' => '2024-03-10 10:00:00',
            ]);
        }
    }
}
