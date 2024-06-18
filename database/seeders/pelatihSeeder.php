<?php

namespace Database\Seeders;

use App\Models\pelatih;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class pelatihSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();
        Pelatih::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            [
                'nama_pelatih' => 'Goo mon ryong',
                'tanggal_lahir' => '1980-01-01',
                'pengcab' => 'Pengcab Medan',
                'dan' => '5',
                'nomor_telepon' => '82',
                'Alamat' => 'korea',
                'foto' => null,
                'users_id' => 13,
                'status' => 'aktif',
            ],
            [
                'nama_pelatih' => 'Jonggun',
                'tanggal_lahir' => '1990-03-03',
                'pengcab' => 'Pengcab Binjai',
                'dan' => '8',
                'nomor_telepon' => '80',
                'Alamat' => 'korea',
                'foto' => null,
                'users_id' => 14,
                'status' => 'tidak aktif',
            ],
            [
                'nama_pelatih' => 'vergil',
                'tanggal_lahir' => '1975-04-04',
                'pengcab' => 'Pengcab Medan',
                'dan' => '6',
                'nomor_telepon' => '1',
                'Alamat' => 'europe',
                'foto' => null,
                'users_id' => 15,
                'status' => 'aktif',
            ],
            [
                'nama_pelatih' => 'scathach',
                'tanggal_lahir' => '1608-12-02',
                'pengcab' => 'Pengcab Deli Serdang',
                'dan' => '4',
                'nomor_telepon' => '000-',
                'Alamat' => 'Ulter',
                'foto' => null,
                'users_id' => 16,
                'status' => 'aktif',
            ],
        ];

        foreach ($data as $value) {
            Pelatih::insert($value);
        }
    }
}
