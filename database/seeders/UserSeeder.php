<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus user jika sudah ada
        User::where('email', 'hendra@admin.com')->delete();
        // Insert user
        User::create([
            'name' => 'hendra',
            'email' => 'hendra@admin.com',
            'password' => Hash::make('hendra123'),
        ]);
    }
}
