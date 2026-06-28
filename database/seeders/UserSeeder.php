<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'teacher',
            'email' => 'teacher@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'teacher'
        ]);

        User::create([
            'name' => 'student',
            'email' => 'student@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'student'
        ]);
        User::create([
            'name' => 'faculty',
            'email' => 'faculty@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'faculty'
        ]);
    }
}