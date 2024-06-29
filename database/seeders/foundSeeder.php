<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ItemFound;
use App\Models\Category;

class foundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        ItemFound::create([
            'user_id' => 13,
            'category_id' => 2,
            'title' => "test item found2",
            'description' => "testets",
            'image' => public_path('/images/media.jpg'),
            'location' => "gedung 5",
            'status' => 1,
            'no_tlp' => "0895776543",
        ]);

        $this->command->info('Seeder FoundSeeder berhasil dijalankan.');
    }
}
