<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatalyonsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('batalyons')->insert([
            ['name' => 'Batalyon 1', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Batalyon 2', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
