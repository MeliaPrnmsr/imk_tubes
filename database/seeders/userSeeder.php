<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();
        User::truncate();
        schema::enableForeignKeyConstraints();


        $data = [
            // murid
            [
                'name' => 'chung mhyung',
                'email' => 'mountht@gmail.com',
                'password' => Hash::make('rahasia'),
                'role' => 'murid',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'perwira satria',
                'email' => 'satria513@gmail.com',
                'password' => Hash::make('rahasia'),
                'role' => 'murid',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Alicia',
                'email' => 'murid1@gmail.com',
                'password' => Hash::make('rahasia'),
                'role' => 'murid',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jason bourne',
                'email' => 'cia321@gmail.com',
                'password' => Hash::make('rahasia'),
                'role' => 'murid',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Morgan le fay',
                'email' => 'morgann@gmail.com',
                'password' => Hash::make('rahasia'),
                'role' => 'murid',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'kenichi',
                'email' => 'kenix@gmail.com',
                'password' => Hash::make('rahasia'),
                'role' => 'murid',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'yuka',
                'email' => 'ykaa@gmail.com',
                'password' => Hash::make('rahasia'),
                'role' => 'murid',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lee Shi Woon',
                'email' => 'LeeShi@gmail.com',
                'password' => Hash::make('rahasia'),
                'role' => 'murid',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Park Hyung Seok',
                'email' => 'ptjj@gmail.com',
                'password' => Hash::make('rahasia'),
                'role' => 'murid',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nero',
                'email' => 'deadbeat@gmail.com',
                'password' => Hash::make('rahasia'),
                'role' => 'murid',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Noa',
                'email' => 'DDD@gmail.com',
                'password' => Hash::make('rahasia'),
                'role' => 'murid',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rio',
                'email' => 'NNN@gmail.com',
                'password' => Hash::make('rahasia'),
                'role' => 'murid',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //pelatih
            [
                'name' => 'Goo mon ryong',
                'email' => 'GoMonRy@example.com',
                'password' => Hash::make('rahasia'),
                'role' => 'pelatih',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jonggun',
                'email' => 'Gun@gmail.com',
                'password' => Hash::make('rahasia'),
                'role' => 'pelatih',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'vergil',
                'email' => 'powerr@gmail.com',
                'password' => Hash::make('rahasia'),
                'role' => 'pelatih',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'scathach',
                'email' => 'gaebolg@gmail.com',
                'password' => Hash::make('rahasia'),
                'role' => 'pelatih',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //admin
            [
                'name' => 'The one',
                'email' => 'admin@god.com',
                'password' => Hash::make('rahasia'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($data as $value) {
            User::insert($value);
        }
    }
}
