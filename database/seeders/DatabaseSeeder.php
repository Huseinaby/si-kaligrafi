<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Bahan;
use App\Models\Karya;
use App\Models\Ornamen;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Provider\Lorem;
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

        Karya::create([
            'ornamen_id' => 1,
            'nama_karya' => "Portofolio 1",
            'slug' => "portofolio-1",
            'jenis_karya' => "Kaligrafi",
            'deskripsi_karya' => "Ini isi deskripsi,Ini isi deskripsi,Ini isi deskripsi",
            'foto_karya' => "kaligrafi.jpeg",
            'tgl_pembuatan' => '2024-4-10',
            'lokasi' => "Barabai",
            'nama_masjid' => "masjid Al-ikhlas"
        ]);

        Karya::create([
            'ornamen_id' => 1,
            'nama_karya' => "Portofolio 2",
            'slug' => "portofolio-2",
            'jenis_karya' => "Kaligrafi",
            'deskripsi_karya' => "Ini isi deskripsi,Ini isi deskripsi,Ini isi deskripsi",
            'foto_karya' => "kaligrafi.jpeg",
            'tgl_pembuatan' => '2024-4-11',
            'lokasi' => "Barabai",
            'nama_masjid' => "masjid Al-ikhlas"
        ]);

        Karya::create([
            'ornamen_id' => 3,
            'nama_karya' => "Portofolio 3",
            'slug' => "portofolio-3",
            'jenis_karya' => "Kaligrafi",
            'deskripsi_karya' => "Ini isi deskripsi,Ini isi deskripsi,Ini isi deskripsi",
            'foto_karya' => "kaligrafi.jpeg",
            'tgl_pembuatan' => '2024-1-10',
            'lokasi' => "Banjarmasin",
            'nama_masjid' => "masjid Al-ikhlas"
        ]);

        Karya::create([
            'ornamen_id' => 2,
            'nama_karya' => "Portofolio 4",
            'slug' => "portofolio-4",
            'jenis_karya' => "Kaligrafi",
            'deskripsi_karya' => "Ini isi deskripsi,Ini isi deskripsi,Ini isi deskripsi",
            'foto_karya' => "kaligrafi.jpeg",
            'tgl_pembuatan' => '2023-4-10',
            'lokasi' => "Kandangan",
            'nama_masjid' => "masjid Al-ikhlas"
        ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
