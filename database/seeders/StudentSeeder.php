<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'student',
            'google_id' => '1234567890',
            'email' => 'student@mail.com',
            'nik' => null,
            'password' => bcrypt('finalproject'),
            'role' => 'student'
        ]);
    }
}
