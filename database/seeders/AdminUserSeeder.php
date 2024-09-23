<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com', // Ganti dengan email yang diinginkan
            'password' => bcrypt('password'), // Ganti dengan password yang diinginkan
            'role' => 'admin', // Pastikan ada kolom role di tabel users
        ]);
    }
}
