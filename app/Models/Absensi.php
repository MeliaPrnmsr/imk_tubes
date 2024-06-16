<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensi';
    protected $primaryKey = 'kode_absensi';

    protected $fillable = [
        'kode_murid', 'status_kehadiran', 'tanggal_absensi'
    ];

    public function murid()
    {
        return $this->belongsTo(Murid::class, 'kode_murid', 'kode_murid');
    }

    public function dojo()
    {
        return $this->hasManyThrough(Dojo::class, Murid::class, 'kode_dojo', 'kode_dojo', 'kode_murid', 'kode_dojo');
    }
}