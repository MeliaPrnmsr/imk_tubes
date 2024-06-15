<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table ='jadwal';

    protected $primaryKey = 'kode_jadwal';

    protected $fillable = [
        'tanggal',
        'jam_mulai',
        'jam_selesai',
        'kode_dojo',
        'tempat',
        'catatan',
    ];

    public function dojo()
    {
        return $this->belongsTo(Dojo::class, 'kode_dojo');
    }
}
