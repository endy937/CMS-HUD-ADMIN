<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegusTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('regus')->insert([
            ['name' => 'Regu Alpha', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Regu Bravo', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
