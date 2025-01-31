<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Anak;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public $timestamps = false; // Disable timestamps
    const ROLE_ADMIN = 'admin';
    const ROLE_PENGGUNA = 'pengguna';
    const ROLE_DOKTER = 'dokter';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'role',
        'noTelp',
        'fotoSertifikat',
        'jenisKelamin',
        'fotoProfil',
        'alamat'
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

    public function children()
    {
        return $this->hasMany(Anak::class, 'id_wali'); // Adjust the foreign key if needed
    }
    public function jadwals()
    {
        return $this->hasMany(Jadwal::class, 'id_dokter');
    }
}
