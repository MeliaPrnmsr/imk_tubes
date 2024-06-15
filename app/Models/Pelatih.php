<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatih extends Model
{
    use HasFactory;

    protected $table ='pelatih';

    protected $primaryKey = 'kode_pelatih';

    protected $guarded = ['kode_murid'];


    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function dojo()
    {
        return $this->belongsToMany(Dojo::class, 'pelatih_dojo', 'kode_pelatih', 'kode_dojo');
    }
}
