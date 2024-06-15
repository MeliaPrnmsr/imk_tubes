<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelatihDojo extends Model
{
    use HasFactory;

    protected $table = 'pelatih_dojo';

    protected $fillable = [
        'kode_pelatih',
        'kode_dojo',
    ];

    protected $primaryKey = null;

    public $incrementing = false;
}
