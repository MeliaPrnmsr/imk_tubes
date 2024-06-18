<?php

namespace Database\Seeders;

use App\Models\event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class informasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        event::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            [
                'nama_informasi' => 'Latihan Intensif Karate',
                'deskripsi_informasi' => 'Latihan intensif untuk persiapan kejuaraan nasional.',
                'dokumen' => 'dokumen_latihan_intensif.pdf',
                'tanggal_informasi' => '2024-07-15',
            ],
            [
                'nama_informasi' => 'Kejuaraan Karate Antar Dojo',
                'deskripsi_informasi' => 'Kejuaraan karate yang melibatkan dojo-dojo se-kota.',
                'dokumen' => 'dokumen_kejuaraan_antar_dojo.pdf',
                'tanggal_informasi' => '2024-08-20',
            ],
            [
                'nama_informasi' => 'Pelatihan Wasit Karate',
                'deskripsi_informasi' => 'Pelatihan untuk calon wasit karate yang akan berlangsung selama dua hari.',
                'dokumen' => 'dokumen_pelatihan_wasit.pdf',
                'tanggal_informasi' => '2024-09-10',
            ],
        ];

        foreach ($data as $value) {
            event::insert($value);
        }
    }
}
