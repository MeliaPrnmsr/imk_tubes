<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interaksi extends Model
{
    use HasFactory;

    protected $table ='interaksi';

    protected $primaryKey = 'kode_interaksi';

    protected $guarded = ['kode_interaksi'];

    public function pengirim()
    {
        return $this->belongsTo(User::class, 'users_id_1');
    }   

    public function penerima()
    {
        return $this->belongsTo(User::class, 'users_id_2');
    }
}
