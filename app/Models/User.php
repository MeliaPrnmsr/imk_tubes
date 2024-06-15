<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function murid()
    {
        return $this->hasOne(Murid::class);
    }

    // Relationship with Pelatih
    public function pelatih()
    {
        return $this->hasOne(Pelatih::class);
    }

    // Relationship with Interaksi (as user 1)
    public function interaksiAsUser1()
    {
        return $this->hasMany(Interaksi::class, 'users_id_1');
    }

    // Relationship with Interaksi (as user 2)
    public function interaksiAsUser2()
    {
        return $this->hasMany(Interaksi::class, 'users_id_2');
    }

    // Relationship with Sertifikat
    public function sertifikat()
    {
        return $this->hasMany(Sertifikat::class);
    }

    // Relationship with Absensi
    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }
}
