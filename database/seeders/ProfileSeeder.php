<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $timestamp = Carbon::now();
        
        foreach ([
            ['user_id' => 1, 'type' => 'admin', 'document_number' => '12345678901'],
            ['user_id' => 2, 'type' => 'user', 'document_number' => '23456789012'],
            ['user_id' => 3, 'type' => 'user', 'document_number' => '34567890123'],
            ['user_id' => 4, 'type' => 'moderator', 'document_number' => '45678901234'],
            ['user_id' => 5, 'type' => 'user', 'document_number' => '56789012345'],
        ] as $profile) {
            if (!DB::table('profiles')->where('user_id', $profile['user_id'])->exists()) {
                DB::table('profiles')->insert(array_merge($profile, [
                    'created_at' => $timestamp,
                    'updated_at' => $timestamp,
                ]));
            }
        }
    }
}
