<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $table ='materi';

    protected $primaryKey = 'kode_materi';

    protected $guarded = ['kode_materi'];


    public function subMateri()
    {
        return $this->hasMany(SubMateri::class, 'kode_materi');
    }
}
