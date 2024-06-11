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

        $karyaArray = [
            [
                'ornamen_id' => 1,
                'nama_karya' => "Portofolio 1",
                'slug' => "portofolio-1",
                'jenis_karya' => "Kaligrafi",
                'deskripsi_karya' => "Kaligrafi ini menggambarkan keindahan seni Islam dengan detail ornamen yang rumit dan indah.",
                'foto_karya' => "kaligrafi1.jpeg",
                'tgl_pembuatan' => '2024-4-10',
                'lokasi' => "Banjarmasin",
                'nama_masjid' => "Masjid Raya Sabilal Muhtadin"
            ],
            [
                'ornamen_id' => 2,
                'nama_karya' => "Portofolio 2",
                'slug' => "portofolio-2",
                'jenis_karya' => "Seni Ukir",
                'deskripsi_karya' => "Seni ukir ini memadukan motif tradisional Banjar dengan gaya kontemporer.",
                'foto_karya' => "ukir1.jpeg",
                'tgl_pembuatan' => '2024-5-15',
                'lokasi' => "Banjarbaru",
                'nama_masjid' => "Masjid Agung Al-Munawwarah"
            ],
            [
                'ornamen_id' => 3,
                'nama_karya' => "Portofolio 3",
                'slug' => "portofolio-3",
                'jenis_karya' => "Kaligrafi",
                'deskripsi_karya' => "Kaligrafi dengan kombinasi warna emas dan hitam yang elegan, menonjolkan tulisan ayat suci Al-Quran.",
                'foto_karya' => "kaligrafi2.jpeg",
                'tgl_pembuatan' => '2024-6-20',
                'lokasi' => "Martapura",
                'nama_masjid' => "Masjid Al-Karomah"
            ],
            [
                'ornamen_id' => 1,
                'nama_karya' => "Portofolio 4",
                'slug' => "portofolio-4",
                'jenis_karya' => "Kaligrafi",
                'deskripsi_karya' => "Kaligrafi ini menggunakan teknik goresan halus dengan tinta hitam di atas kertas putih.",
                'foto_karya' => "kaligrafi3.jpeg",
                'tgl_pembuatan' => '2024-7-25',
                'lokasi' => "Pelaihari",
                'nama_masjid' => "Masjid Al-Hidayah"
            ],
            [
                'ornamen_id' => 2,
                'nama_karya' => "Portofolio 5",
                'slug' => "portofolio-5",
                'jenis_karya' => "Seni Ukir",
                'deskripsi_karya' => "Ukiran kayu ini menampilkan motif kaligrafi dengan sentuhan modern.",
                'foto_karya' => "ukir2.jpeg",
                'tgl_pembuatan' => '2024-8-30',
                'lokasi' => "Kandangan",
                'nama_masjid' => "Masjid Agung At-Taqwa"
            ],
            [
                'ornamen_id' => 3,
                'nama_karya' => "Portofolio 6",
                'slug' => "portofolio-6",
                'jenis_karya' => "Kaligrafi",
                'deskripsi_karya' => "Kaligrafi ini menggunakan aksen warna merah dan emas untuk menonjolkan keindahan huruf Arab.",
                'foto_karya' => "kaligrafi4.jpeg",
                'tgl_pembuatan' => '2024-9-10',
                'lokasi' => "Marabahan",
                'nama_masjid' => "Masjid Nurul Iman"
            ],
            [
                'ornamen_id' => 1,
                'nama_karya' => "Portofolio 7",
                'slug' => "portofolio-7",
                'jenis_karya' => "Kaligrafi",
                'deskripsi_karya' => "Kaligrafi ini menggunakan aksen warna biru dan perak untuk menonjolkan keindahan huruf Arab.",
                'foto_karya' => "kaligrafi5.jpeg",
                'tgl_pembuatan' => '2024-10-05',
                'lokasi' => "Amuntai",
                'nama_masjid' => "Masjid Raya At-Taqwa"
            ],
            [
                'ornamen_id' => 2,
                'nama_karya' => "Portofolio 8",
                'slug' => "portofolio-8",
                'jenis_karya' => "Seni Ukir",
                'deskripsi_karya' => "Ukiran kayu ini menampilkan motif kaligrafi yang klasik namun elegan.",
                'foto_karya' => "ukir3.jpeg",
                'tgl_pembuatan' => '2024-11-15',
                'lokasi' => "Tanjung",
                'nama_masjid' => "Masjid Jami' Tanjung"
            ],
            [
                'ornamen_id' => 3,
                'nama_karya' => "Portofolio 9",
                'slug' => "portofolio-9",
                'jenis_karya' => "Kaligrafi",
                'deskripsi_karya' => "Kaligrafi ini menggunakan tinta emas di atas kertas hitam, memberikan kesan elegan dan mewah.",
                'foto_karya' => "kaligrafi6.jpeg",
                'tgl_pembuatan' => '2024-12-01',
                'lokasi' => "Banjarmasin",
                'nama_masjid' => "Masjid Sultan Suriansyah"
            ],
            [
                'ornamen_id' => 1,
                'nama_karya' => "Portofolio 10",
                'slug' => "portofolio-10",
                'jenis_karya' => "Kaligrafi",
                'deskripsi_karya' => "Kaligrafi yang menggambarkan ayat-ayat suci dengan detail ornamen geometris yang kompleks.",
                'foto_karya' => "kaligrafi7.jpeg",
                'tgl_pembuatan' => '2024-12-25',
                'lokasi' => "Batulicin",
                'nama_masjid' => "Masjid Agung Nurul Hidayah"
            ]
        ];
        
        foreach ($karyaArray as $karya) {
            Karya::create($karya);
        }
        
        User::create([
            'username' => "admin",
            'nama_lengkap' => 'Maulidin Abdi',
            'password' => bcrypt('admin'),
            'level' => '1'
        ]);

        User::create([
            'username' => "Husein",
            'nama_lengkap' => 'Abu Husein',
            'password' => bcrypt('1234'),
            'level' => '2'
        ]);

        Testimoni::create([
            'id_user' => 2,
            'karya_id' =>  1,
            'nama_panitia' => 'maulidin',
            'slug' => 'testimoni-1',
            'isi_testimoni' => 'qwertyuiop asdfghjkl; zxcvbnm, wertyuio',
            'tgl_testimoni' => '2022-10-12',
            'lokasi_masjid' => 'Banjarbaru',
            'nama_masjid' => 'Al-Muhajirin'
        ]);

        
        Testimoni::create([
            'id_user' => 2,
            'karya_id' => 4,
            'nama_panitia' => 'maulidin',
            'slug' => 'testimoni-2',
            'isi_testimoni' => 'qwertyuiop asdfghjkl; zxcvbnm, wertyuio',
            'tgl_testimoni' => '2023-7-12',
            'lokasi_masjid' => 'amuntai',
            'nama_masjid' => 'Al-Muhajirin'
        ]);
        Testimoni::create([
            'id_user' => 1,
            'karya_id' => 6,
            'nama_panitia' => 'Hidayat',
            'slug' => 'testimoni-3',
            'isi_testimoni' => 'qwertyuiop asdfghjkl; zxcvbnm, wertyuio',
            'tgl_testimoni' => '2023-7-12',
            'lokasi_masjid' => 'amuntai',
            'nama_masjid' => 'Al-Muhajirin'
        ]);
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
