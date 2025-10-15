<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('profiles')->insert([
            [
                'user_id' => 1,
                'full_name' => 'John Doe',
                'phone_number' => '08123456789',
                'date_of_birth' => '1990-01-01',
                'avatar_url' => null,
                'satuan_id' => 1,
                'batalyon_id' => 1,
                'ranks_id' => 1,
                'regus_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'full_name' => 'Jane Smith',
                'phone_number' => '08987654321',
                'date_of_birth' => '1992-05-10',
                'avatar_url' => null,
                'satuan_id' => 2,
                'batalyon_id' => 2,
                'ranks_id' => 2,
                'regus_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
