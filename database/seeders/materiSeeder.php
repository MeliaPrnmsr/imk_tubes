<?php

namespace Database\Seeders;

use App\Models\materi;
use App\Models\subMateri;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class materiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Schema::disableForeignKeyConstraints();
        Materi::truncate();
        SubMateri::truncate();
        Schema::enableForeignKeyConstraints();

        $materiData = [
            [
                'judul_materi' => 'Materi 1',
                'judul_sub_materi' => 'Sub Materi 1',
                'jenis_materi' => 'kihon',
                'deskripsi_materi' => 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum',
                'sabuk' => 'putih',
            ],
            [
                'judul_materi' => 'Materi 2',
                'judul_sub_materi' => 'Sub Materi 1',
                'jenis_materi' => 'kumite',
                'deskripsi_materi' => 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum',
                'sabuk' => 'kuning',
            ],
            [
                'judul_materi' => 'Materi 1',
                'judul_sub_materi' => 'Sub Materi 1',
                'jenis_materi' => 'kata', // Ganti 'dachi' dengan 'kata'
                'deskripsi_materi' => 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum',
                'sabuk' => 'kuning',
            ],
            [
                'judul_materi' => 'Materi 2',
                'judul_sub_materi' => 'Sub Materi 2',
                'jenis_materi' => 'kata', // Ganti 'dachi' dengan 'kata'
                'deskripsi_materi' => 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum',
                'sabuk' => 'kuning',
            ],
            
        ];

        foreach ($materiData as $materi) {
            $createdMateri = materi::create($materi);

           
            $subMateriData = [
                [
                    'sub_materi' => 'Sub Materi 1',
                    'link_youtube' => 'https://www.youtube.com/watch?v=example1',
                    'isi_materi' => 'Isi materi 1',
                    'foto' => 'foto1.jpg',
                    'kode_materi' => $createdMateri->kode_materi,
                ],
                [
                    'sub_materi' => 'Sub Materi 2',
                    'link_youtube' => 'https://www.youtube.com/watch?v=example2',
                    'isi_materi' => 'Isi materi 2',
                    'foto' => 'foto2.jpg',
                    'kode_materi' => $createdMateri->kode_materi,
                ],
                [
                    'sub_materi' => 'Sub Materi 1',
                    'link_youtube' => 'https://www.youtube.com/watch?v=example2',
                    'isi_materi' => 'Isi materi 2',
                    'foto' => 'foto3.jpg',
                    'kode_materi' => $createdMateri->kode_materi,
                ],
                [
                    'sub_materi' => 'Sub Materi 2',
                    'link_youtube' => 'https://www.youtube.com/watch?v=example2',
                    'isi_materi' => 'Isi materi 2',
                    'foto' => 'foto4.jpg',
                    'kode_materi' => $createdMateri->kode_materi,
                ],
            ];

            foreach ($subMateriData as $subMateri) {
                subMateri::create($subMateri);
            }
        }
    }
}
