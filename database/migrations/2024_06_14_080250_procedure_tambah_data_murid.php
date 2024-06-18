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
            DROP PROCEDURE IF EXISTS TambahDataMurid;
            CREATE PROCEDURE TambahDataMurid(
                IN p_name VARCHAR(255),
                IN p_email VARCHAR(255),
                IN p_password VARCHAR(255),
                IN p_tempat_lahir VARCHAR(255),
                IN p_tanggal_lahir DATE,
                IN p_nomor_telepon_rumah VARCHAR(255),
                IN p_nama_orang_tua_wali VARCHAR(255),
                IN p_pekerjaan_orang_tua VARCHAR(255),
                IN p_pendidikan_terakhir VARCHAR(255),
                IN p_foto VARCHAR(255),
                IN p_sabuk ENUM("putih", "kuning", "hijau", "biru", "coklat", "hitam"),
                IN p_status ENUM("aktif", "tidak aktif"),
                IN p_kode_dojo BIGINT
            )
            BEGIN
                DECLARE id_user_baru BIGINT;
                DECLARE id_murid_baru BIGINT;

                -- Insert into users table
                INSERT INTO users (name, email, password, role, created_at, updated_at)
                VALUES (p_name, p_email, p_password, "murid", NOW(), NOW());
                SET id_user_baru = LAST_INSERT_ID();

                -- Insert into murid table
                INSERT INTO `murid`(`nama_murid`, `tempat_lahir`, `tanggal_lahir`, `nomor_telepon_rumah`, `nama_orang_tua_wali`, `pekerjaan_orang_tua`, `Pendidikan_terakhir`, `foto`, `sabuk`, `status`, `user_id`, `kode_dojo`, `created_at`, `updated_at`)
                VALUES (p_name, p_tempat_lahir, p_tanggal_lahir, p_nomor_telepon_rumah, p_nama_orang_tua_wali, p_pekerjaan_orang_tua, p_pendidikan_terakhir, p_foto, p_sabuk, p_status, id_user_baru, p_kode_dojo, NOW(), NOW());
                -- SET id_murid_baru = LAST_INSERT_ID();
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP PROCEDURE TambahDataMurid");
    }
};
