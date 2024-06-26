<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;

    protected $table = 'murid';
    protected $primaryKey = 'kode_murid';
    protected $guarded = ['kode_murid'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function dojo()
    {
        return $this->belongsTo(Dojo::class, 'kode_dojo');
    }
}
