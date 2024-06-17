<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected $table = 'users';

    public function pendaftarans()
    {
        return $this->hasMany(PendaftaranPemeriksaan::class, 'idPasien');
    }

    public function transaksiPemeriksaans()
    {
        return $this->hasManyThrough(
            TransaksiPemeriksaan::class, // The related model
            PendaftaranPemeriksaan::class, // The intermediate model
            'idPasien', // Foreign key on the Pendaftaran table
            'nomorPendaftaran', // Foreign key on the TransaksiPemeriksaan table
            'idPasien', // Local key on the User table
            'nomorPendaftaran' // Local key on the Pendaftaran table
        );
    }
}
