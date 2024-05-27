<?php

namespace Database\Seeders;

use App\Models\Bahan;
use App\Models\Ornamen;
use App\Models\User;
use Faker\Provider\Lorem;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Bahan::create([
            'nama_bahan' => "Jati",
            'slug' => "jati-kayu",
            'jenis_bahan' => 'Kayu',
            'deskripsi_bahan' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Distinctio quo, sequi, nam necessitatibus dignissimos vero eos 
                            exercitationem eius mollitia saepe totam asperiores velit odio. 
                            Sapiente dolorum nisi veritatis expedita laboriosam?",
            'foto_bahan' => "jati.jpg"
        ]);

        Bahan::create([
            'nama_bahan' => "Ulin",
            'slug' => "ulin-kayu",
            'jenis_bahan' => 'Kayu',
            'deskripsi_bahan' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Distinctio quo, sequi, nam necessitatibus dignissimos vero eos 
                            exercitationem eius mollitia saepe totam asperiores velit odio. 
                            Sapiente dolorum nisi veritatis expedita laboriosam?",
            'foto_bahan' => "ulin.jpg"
        ]);

        Bahan::create([
            'nama_bahan' => "Alumunium",
            'slug' => "aluminium-besi",
            'jenis_bahan' => 'besi',
            'deskripsi_bahan' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Distinctio quo, sequi, nam necessitatibus dignissimos vero eos 
                            exercitationem eius mollitia saepe totam asperiores velit odio. 
                            Sapiente dolorum nisi veritatis expedita laboriosam?",
            'foto_bahan' => "alumunium.jpg"
        ]);

        Ornamen::factory(20)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
