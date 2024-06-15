<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensi';

    protected $primaryKey = 'kode_absensi';

    public function user()
    {
        return $this->belongsTo(murid::class, 'kode_murid');
    }
}
