<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
            DROP PROCEDURE IF EXISTS TambahMurid;
            CREATE PROCEDURE TambahMurid(
                IN p_name VARCHAR(255),
                IN p_email VARCHAR(255),
                IN p_password VARCHAR(255),
                IN p_tanggal_lahir DATE,
                IN p_nomor_telepon_rumah VARCHAR(255),
                IN p_nama_orang_tua_wali VARCHAR(255),
                IN p_pekerjaan_orang_tua VARCHAR(255),
                IN p_pendidikan_terakhir VARCHAR(255),
                IN p_foto VARCHAR(255),
                IN p_sabuk ENUM("putih", "kuning", "hijau", "biru", "coklat", "hitam"),
                IN p_status ENUM("aktif", "tidak aktif"),
                IN p_kode_dojo BIGINT,
                IN p_sabuk_terakhir ENUM("putih", "kuning", "hijau", "biru", "coklat", "hitam"),
                IN p_dojo_terakhir VARCHAR(255),
                IN p_perguruan VARCHAR(255)
            )
            BEGIN
                DECLARE id_user_baru BIGINT;
                DECLARE id_murid_baru BIGINT;

                -- Insert into users table
                INSERT INTO users (name, email, password, role, created_at, updated_at)
                VALUES (p_name, p_email, p_password, "murid", NOW(), NOW());
                SET id_user_baru = LAST_INSERT_ID();

                -- Insert into murid table
                INSERT INTO murid (nama_murid, tanggal_lahir, nomor_telepon_rumah, nama_orang_tua_wali, pekerjaan_orang_tua, pendidikan_terakhir, foto, sabuk, status, users_id, kode_dojo, created_at, updated_at)
                VALUES (p_name, p_tanggal_lahir, p_nomor_telepon_rumah, p_nama_orang_tua_wali, p_pekerjaan_orang_tua, p_pendidikan_terakhir, p_foto, p_sabuk, p_status, id_user_baru, p_kode_dojo, NOW(), NOW());
                SET id_murid_baru = LAST_INSERT_ID();

                -- Insert into pendaftaran table
                INSERT INTO pendaftaran (nama_murid, tanggal_lahir, nomor_telepon_rumah, nama_orang_tua_wali, pekerjaan_orang_tua, Pendidikan_terakhir, sabuk_terakhir, dojo_terakhir, perguruan, created_at, updated_at)
                VALUES (p_name, p_tanggal_lahir, p_nomor_telepon_rumah, p_nama_orang_tua_wali, p_pekerjaan_orang_tua, p_pendidikan_terakhir, p_sabuk_terakhir, p_dojo_terakhir, p_perguruan, NOW(), NOW());
            END
        ');

        DB::unprepared('
        DROP PROCEDURE IF EXISTS TambahPelatih;
        CREATE PROCEDURE TambahPelatih(
            IN p_name VARCHAR(255),
            IN p_email VARCHAR(255),
            IN p_password VARCHAR(255),
            IN p_tanggal_lahir DATE,
            IN p_pengcab VARCHAR(255),
            IN p_dan VARCHAR(255),
            IN p_nomor_telepon VARCHAR(255),
            IN p_alamat VARCHAR(255),
            IN p_foto VARCHAR(255),
            IN p_status ENUM("aktif", "tidak aktif")
        )
        BEGIN
            DECLARE id_user_baru BIGINT;
            DECLARE id_pelatih_baru BIGINT;
    
            -- Insert into users table
            INSERT INTO users (name, email, password, role, created_at, updated_at)
            VALUES (p_name, p_email, p_password, "pelatih", NOW(), NOW());
            SET id_user_baru = LAST_INSERT_ID();
    
            -- Insert into pelatih table
            INSERT INTO pelatih (nama_pelatih, tanggal_lahir, pengcab, dan, nomor_telepon, Alamat, foto, users_id, status, created_at, updated_at)
            VALUES (p_name, p_tanggal_lahir, p_pengcab, p_dan, p_nomor_telepon, p_alamat, p_foto, id_user_baru, p_status, NOW(), NOW());
            SET id_pelatih_baru = LAST_INSERT_ID();
    
            -- Return the id of the new pelatih
            SELECT id_pelatih_baru AS kode_pelatih;
        END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP PROCEDURE TambahMurid");
        DB::unprepared("DROP PROCEDURE TambahPelatih");
    }
};
