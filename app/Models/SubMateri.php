<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMateri extends Model
{
    use HasFactory;

    protected $table ='sub_materi';

    protected $guarded = ['id'];

    public function materi()
    {
        return $this->belongsTo(Materi::class, 'kode_materi');
    }
}
