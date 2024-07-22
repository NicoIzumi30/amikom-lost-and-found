<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'company_name' => 'Universitas Amikom Yogyakarta',
            'application_name' => 'Lost and Found',
            'application_description' => 'Temukan Barangmu Yang Hilang dan Laporkan Barang Yang Kamu Temukan',
            'application_theme' => '#4A1B9D',          
            'permitted_email' => 'amikom.ac.id,students.amikom.ac.id',
            'company_logo' => null
        ]);
    }
}
