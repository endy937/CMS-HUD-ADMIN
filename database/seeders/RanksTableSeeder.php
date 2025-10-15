<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RanksTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ranks')->insert([
            ['name' => 'Prajurit', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sersan', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
