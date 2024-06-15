<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Dojo;
use App\Models\Murid;
use App\Models\Pelatih;
use App\Models\PelatihDojo;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // USER
        // USER
        // USER
        User::create([
            'name' => "Melia Purnamasari Sihombing", 
            'email' => "melia@gmail.com",
            'password' => bcrypt('rahasia'),
            'role' => "murid"
        ]);

        User::create([
            'name' => "Satria Perwira", 
            'email' => "satria@gmail.com",
            'password' => bcrypt('rahasia'),
            'role' => "murid"
        ]);

        User::create([
            'name' => "Daniel", 
            'email' => "daniel@gmail.com",
            'password' => bcrypt('rahasia'),
            'role' => "pelatih"
        ]);

        User::create([
            'name' => "Admin", 
            'email' => "meliaprnmsr@gmail.com",
            'password' => bcrypt('rahasia'),
            'role' => "pelatih"
        ]);

        // DOJO
        // DOJO
        // DOJO
        Dojo::create([
            'nama_dojo' => "Dojo Al-Amin", 
            'alamat_dojo' => "Medan Merdeka",
            'pengcab' => "Pengcab Medan Merdeka",
            'tanggal_berdiri' => "2024-06-04",
            'status' => "aktif"
        ]);

        Dojo::create([
            'nama_dojo' => "Dojo B", 
            'alamat_dojo' => "Setia Budi",
            'pengcab' => "Pengcab Medan Merdeka",
            'tanggal_berdiri' => "2022-06-04",
            'status' => "aktif"
        ]);

        Dojo::create([
            'nama_dojo' => "Dojo C", 
            'alamat_dojo' => "Dr Mansyur",
            'pengcab' => "Pengcab b",
            'tanggal_berdiri' => "2021-06-04",
            'status' => "aktif"
        ]);

        // MURID
        // MURID
        // MURID
        Murid::create([
            'nama_murid' => "Melia Purnamasari Sihombing",
            'tempat_lahir' => "Batam",
            'tanggal_lahir' => "2004-06-02",
            'nomor_telepon_rumah' => "08126453798",
            'nama_orang_tua_wali' => "Tom Holland",
            'pekerjaan_orang_tua' => "Artis",
            'Pendidikan_terakhir' => "SMK",
            'sabuk' => "putih",
            'status' => "aktif",
            'user_id' => "1",
            'kode_dojo' => "1",
            
        ]);

        Murid::create([
            'nama_murid' => "Perwira Satria",
            'tempat_lahir' => "Medan",
            'tanggal_lahir' => "2004-08-02",
            'nomor_telepon_rumah' => "08126453798",
            'nama_orang_tua_wali' => "Andrew Garfield",
            'pekerjaan_orang_tua' => "Artis",
            'Pendidikan_terakhir' => "SMA",
            'sabuk' => "kuning",
            'status' => "aktif",
            'user_id' => "2",
            'kode_dojo' => "3",
            
        ]);

        // PELATIH
        // PELATIH
        // PELATIH
        Pelatih::create([
            'nama_pelatih' => "Daniel",
            'tanggal_lahir' => "2000-08-02",
            'pengcab' => "Pengcab Medan Merdeka",
            'dan' => "1",
            'nomor_telepon' => "08126453798",
            'Alamat' => "Medan Baru",
            'users_id' => "3",
            'status' => "aktif"            
        ]);

    }
}
