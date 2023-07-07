<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Bidan',
            'role' => 'admin',
            'email' => 'bidan@example.com',
            'password' => bcrypt('bidan123'),
        ]);

        User::create([
            'name' => 'Admin',
            'role' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
        ]);

        User::create([
            'name' => 'pengunjung',
            'role' => 'biasa',
            'email' => 'pengunjung@example.com',
            'password' => bcrypt('pengunjung'),
        ]);

        User::create([
            'name' => 'Pegawai',
            'role' => 'biasa',
            'email' => 'pegawai@example.com',
            'password' => bcrypt('pegawai1'),
        ]);
    }
}
