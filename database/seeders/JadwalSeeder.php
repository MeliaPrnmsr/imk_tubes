<?php

namespace Database\Seeders;

use App\Models\jadwal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();
        Jadwal::truncate();       
        Schema::enableForeignKeyConstraints();

        // Data yang akan dimasukkan
        $data = [
            [
                'tanggal' => '2023-06-01',
                'jam_mulai' => '09:00:00',
                'jam_selesai' => '11:00:00',
                'kode_dojo' => 1,
                'catatan' => 'Latihan pagi',
                'tempat' => 'Dojo Utama'
            ],
            [
                'tanggal' => '2023-06-02',
                'jam_mulai' => '15:00:00',
                'jam_selesai' => '17:00:00',
                'kode_dojo' => 2,
                'catatan' => 'Latihan sore',
                'tempat' => null // Tempat kosong
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ];

        // Memasukkan data ke dalam tabel jadwal
        foreach ($data as $value) {
            jadwal::create($value);
        }
    }
}
