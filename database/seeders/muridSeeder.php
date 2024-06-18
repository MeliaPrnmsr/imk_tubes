<?php

namespace Database\Seeders;

use App\Models\murid;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class muridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();
        murid::truncate();
        schema::enableForeignKeyConstraints();

        $data = [
            [
                'nama_murid' => 'chung myung',
                'tempat_lahir' => 'murim',
                'tanggal_lahir' => '1708-01-13',
                'nomor_telepon_rumah' => '0000',
                'nama_orang_tua_wali' => 'unknown',
                'pekerjaan_orang_tua' => 'unknown',
                'Pendidikan_terakhir' => 'unknown',
                'sabuk' => 'putih',
                'status' => 'aktif',
                'user_id' => 1,
                'kode_dojo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_murid' => 'Perwira Satria',
                'tempat_lahir' => 'heaven',
                'tanggal_lahir' => '2004-03-20',
                'nomor_telepon_rumah' => 'unknown',
                'nama_orang_tua_wali' => 'unknown',
                'pekerjaan_orang_tua' => 'unknown',
                'Pendidikan_terakhir' => 'Kuliah',
                'sabuk' => 'hijau',
                'status' => 'aktif',
                'user_id' => 2,
                'kode_dojo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_murid' => 'Alicia',
                'tempat_lahir' => 'dunno',
                'tanggal_lahir' => '1900-01-01',
                'nomor_telepon_rumah' => '+81',
                'nama_orang_tua_wali' => 'unknown',
                'pekerjaan_orang_tua' => 'unknown',
                'Pendidikan_terakhir' => 'unknown',
                'sabuk' => 'putih',
                'status' => 'aktif',
                'user_id' => 3,
                'kode_dojo' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_murid' => 'Jason bourne',
                'tempat_lahir' => 'US',
                'tanggal_lahir' => '1900-01-01',
                'nomor_telepon_rumah' => 'unknown',
                'nama_orang_tua_wali' => 'unknown',
                'pekerjaan_orang_tua' => 'unknown',
                'Pendidikan_terakhir' => 'unknown',
                'sabuk' => 'hitam',
                'status' => 'aktif',
                'user_id' => 4,
                'kode_dojo' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_murid' => 'Morgan le fay',
                'tempat_lahir' => 'britain',
                'tanggal_lahir' => '1600-01-01',
                'nomor_telepon_rumah' => 'unknown',
                'nama_orang_tua_wali' => 'unknown',
                'pekerjaan_orang_tua' => 'unknown',
                'Pendidikan_terakhir' => 'Royal',
                'sabuk' => 'putih',
                'status' => 'aktif',
                'user_id' => 5,
                'kode_dojo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_murid' => 'kenichi',
                'tempat_lahir' => 'japan',
                'tanggal_lahir' => '1999-08-21',
                'nomor_telepon_rumah' => 'unknown',
                'nama_orang_tua_wali' => 'unknown',
                'pekerjaan_orang_tua' => 'unknown',
                'Pendidikan_terakhir' => 'SMA',
                'sabuk' => 'hitam',
                'status' => 'aktif',
                'user_id' => 6,
                'kode_dojo' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_murid' => 'yuka',
                'tempat_lahir' => 'japan',
                'tanggal_lahir' => '2000-01-01',
                'nomor_telepon_rumah' => 'unknown',
                'nama_orang_tua_wali' => 'unknown',
                'pekerjaan_orang_tua' => 'unknown',
                'Pendidikan_terakhir' => 'Kuliah',
                'sabuk' => 'hijau',
                'status' => 'aktif',
                'user_id' => 7,
                'kode_dojo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_murid' => 'Lee Shi Woon',
                'tempat_lahir' => 'korea',
                'tanggal_lahir' => '2004-03-20',
                'nomor_telepon_rumah' => 'unknown',
                'nama_orang_tua_wali' => 'unknown',
                'pekerjaan_orang_tua' => 'unknown',
                'Pendidikan_terakhir' => 'Kuliah',
                'sabuk' => 'coklat',
                'status' => 'aktif',
                'user_id' => 8,
                'kode_dojo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_murid' => 'Park hyung seok',
                'tempat_lahir' => 'korea',
                'tanggal_lahir' => '2001-07-12',
                'nomor_telepon_rumah' => 'unknown',
                'nama_orang_tua_wali' => 'unknown',
                'pekerjaan_orang_tua' => 'unknown',
                'Pendidikan_terakhir' => 'Kuliah',
                'sabuk' => 'hijau',
                'status' => 'aktif',
                'user_id' => 9,
                'kode_dojo' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_murid' => 'Nero',
                'tempat_lahir' => 'dunno',
                'tanggal_lahir' => '1500-01-01',
                'nomor_telepon_rumah' => 'unknown',
                'nama_orang_tua_wali' => 'unknown',
                'pekerjaan_orang_tua' => 'unknown',
                'Pendidikan_terakhir' => 'SMA',
                'sabuk' => 'putih',
                'status' => 'aktif',
                'user_id' => 10,
                'kode_dojo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_murid' => 'Noa',
                'tempat_lahir' => 'dunno',
                'tanggal_lahir' => '2000-01-01',
                'nomor_telepon_rumah' => 'unknown',
                'nama_orang_tua_wali' => 'unknown',
                'pekerjaan_orang_tua' => 'unknown',
                'Pendidikan_terakhir' => 'SMA',
                'sabuk' => 'hijau',
                'status' => 'aktif',
                'user_id' => 11,
                'kode_dojo' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_murid' => 'Rio',
                'tempat_lahir' => 'dunno',
                'tanggal_lahir' => '2000-01-01',
                'nomor_telepon_rumah' => 'unknown',
                'nama_orang_tua_wali' => 'unknown',
                'pekerjaan_orang_tua' => 'unknown',
                'Pendidikan_terakhir' => 'Kuliah',
                'sabuk' => 'hijau',
                'status' => 'aktif',
                'user_id' => 12,
                'kode_dojo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($data as $value) {
            murid::insert($value);
        }
    }
}
