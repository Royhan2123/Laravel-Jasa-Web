<?php

namespace Database\Seeders;

use App\Models\DetailUser;
use Illuminate\Database\Seeder;

class DetailUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detail_user = [
            [
                'users_id' => 1,
                'photo' => '',
                'role' => 'Website Developer',
                'contact_number' => '',
                'biography' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'users_id' => 2,
                'photo' => '',
                'role' => 'Android Developer',
                'contact_number' => '',
                'biography' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        DetailUser::insert($detail_user);
    }
}
