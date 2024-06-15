<?php

namespace Database\Seeders;

use App\Models\dojo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class dojoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();
        dojo::truncate();
        schema::enableForeignKeyConstraints();

        $data = [
            [
                'nama_dojo' => 'Mount hua',
                'alamat_dojo' => 'Address A',
                'pengcab' => 'Pengcab A',
                'tanggal_berdiri' => '2020-01-01',
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_dojo' => 'Dojo B',
                'alamat_dojo' => 'Address B',
                'pengcab' => 'Pengcab B',
                'tanggal_berdiri' => '2021-02-01',
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_dojo' => 'Dojo C',
                'alamat_dojo' => 'Address B',
                'pengcab' => 'Pengcab B',
                'tanggal_berdiri' => '2021-02-01',
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($data as $value) {
            dojo::insert($value);
        }
    }
}
