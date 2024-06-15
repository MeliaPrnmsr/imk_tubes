<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table ='informasi';

    protected $primaryKey = 'kode_informasi';

    protected $guarded = ['kode_murid'];

    public $timestamps = false;
}
