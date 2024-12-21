<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nik' => '1234567890123456',
                'name' => 'Admin Default',
                'email' => 'admin@example.com',
                'phone' => '081234567890',
                'roles' => 'ADMIN',
                'email_verified_at' => now(),
                'password' => Hash::make('admin123'), // Password untuk Admin
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nik' => '1234567890123457',
                'name' => 'Petugas Default',
                'email' => 'petugas@example.com',
                'phone' => '081234567891',
                'roles' => 'PETUGAS',
                'email_verified_at' => now(),
                'password' => Hash::make('petugas123'), // Password untuk Petugas
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nik' => '1234567890123458',
                'name' => 'Masyarakat Default',
                'email' => 'masyarakat@example.com',
                'phone' => '081234567892',
                'roles' => 'MASYARAKAT',
                'email_verified_at' => now(),
                'password' => Hash::make('masyarakat123'), // Password untuk Masyarakat
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
