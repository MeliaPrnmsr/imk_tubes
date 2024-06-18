<?php

namespace Database\Seeders;

use App\Models\pelatihDojo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class pelatihDojoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        pelatihDojo::truncate();
        schema::enableForeignKeyConstraints();

        $data = [
            // murid
            ['kode_pelatih' => 1, 'kode_dojo' => 1,],
            ['kode_pelatih' => 1, 'kode_dojo' => 2,],
            ['kode_pelatih' => 2, 'kode_dojo' => 2,],
            ['kode_pelatih' => 2, 'kode_dojo' => 3,],
            ['kode_pelatih' => 3, 'kode_dojo' => 3,],
            ['kode_pelatih' => 3, 'kode_dojo' => 1,],
            ['kode_pelatih' => 4, 'kode_dojo' => 1,],
        ];

        foreach ($data as $value) {
            pelatihDojo::insert($value);
        }
    }
}
