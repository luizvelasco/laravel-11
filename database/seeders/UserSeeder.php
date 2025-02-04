<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timestamp = Carbon::now();

         // Seed para a tabela users
         foreach ([
            ['name' => 'Admin User', 'email' => 'admin@example.com', 'email_verified_at' => now(), 'password' => Hash::make('password')],
            ['name' => 'John Doe', 'email' => 'john@example.com', 'email_verified_at' => now(), 'password' => Hash::make('password')],
            ['name' => 'Jane Doe', 'email' => 'jane@example.com', 'email_verified_at' => now(), 'password' => Hash::make('password')],
            ['name' => 'Alice Brown', 'email' => 'alice@example.com', 'email_verified_at' => now(), 'password' => Hash::make('password')],
            ['name' => 'Bob Smith', 'email' => 'bob@example.com', 'email_verified_at' => now(), 'password' => Hash::make('password')],
        ] as $user) {
            if (!DB::table('users')->where('email', $user['email'])->exists()) {
                DB::table('users')->insert(array_merge($user, [
                    'created_at' => $timestamp,
                    'updated_at' => $timestamp,
                ]));
            }
        }
    }
}
