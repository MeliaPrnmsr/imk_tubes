<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dojo extends Model
{
    use HasFactory;

    protected $table ='dojo';
    
    protected $primaryKey = 'kode_dojo';

    protected $fillable = [
        'nama_dojo',
        'alamat_dojo',
        'pengcab',
        'tanggal_berdiri',
        'status',
    ];

    public function murid()
    {
        return $this->hasMany(Murid::class, 'kode_dojo');
    }

    public function pelatih()
    {
        return $this->belongsToMany(Pelatih::class, 'pelatih_dojo', 'kode_dojo', 'kode_pelatih');
    }
    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'kode_dojo');
    }
}
