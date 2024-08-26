<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Bahan;
use App\Models\Karya;
use App\Models\Ornamen;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Testimoni;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::create([
            'username' => "admin",
            'nama_lengkap' => 'Maulidin Abdi',
            'password' => bcrypt('admin'),
            'level' => '1'
        ]);

    }
}
