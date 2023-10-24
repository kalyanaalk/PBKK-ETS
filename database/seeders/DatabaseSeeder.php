<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Jenis;
use App\Models\Kondisi;
use App\Models\Result;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Result::factory(1)->create();

        \App\Models\Jenis::factory()->create([
            'jenis' => 'jenis 1',
        ]);

        \App\Models\Jenis::factory()->create([
            'jenis' => 'jenis 2',
        ]);

        \App\Models\Jenis::factory()->create([
            'jenis' => 'jenis 3',
        ]);

        \App\Models\Kondisi::factory()->create([
            'kondisi' => 'baik',
        ]);

        \App\Models\Kondisi::factory()->create([
            'kondisi' => 'layak',
        ]);

        \App\Models\Kondisi::factory()->create([
            'kondisi' => 'rusak',
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Sandhika',
        //     'email' => 'san@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Jenis
    }
}
