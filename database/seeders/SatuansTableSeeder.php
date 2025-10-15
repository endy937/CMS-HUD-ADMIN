<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuansTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('satuans')->insert([
            ['name' => 'Satuan A', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Satuan B', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
