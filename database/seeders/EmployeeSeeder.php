<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'employe',
            'email' => null,
            'nik' => '1234567890',
            'password' => bcrypt('finalproject'),
            'image'=> public_path('/images/user.png'),
            'role' => 'employee'
        ]);
    }


}
