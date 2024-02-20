<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama' => "I Gusti Lanang Agung Eka Chandra Diva",
            'email' => "agungdiva55@gmail.com",
            'password' => bcrypt('password'),
            'alamat' => 'Dalung Permai',
            'telepon' => '08762326356523',
            'role' => 'admin'
        ]
        );
    }
}
