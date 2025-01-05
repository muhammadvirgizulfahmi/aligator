<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Perkembangan;

class Anak extends Model
{
    use HasFactory;
    public $timestamps = false; // Disable timestamps

    protected $table = 'anak';
    protected $fillable = ['id', 'id_wali', 'nama', 'tgl_lahir', 'jenisKelamin',
    'umur', 'tinggiBadan', 'beratBadan','lingkarKepala','rekomendasiSistem','rekomendasiDokter'];

    public function perkembangan()
    {
        return $this->hasMany(Perkembangan::class, 'id_anak'); // 'id_anak' is the foreign key in perkembangan
    }
    public function wali()
    {
        return $this->belongsTo(User::class, 'id_wali'); // This assumes id_wali references the id in the User table
    }
    protected $casts = [
        'tgl_lahir' => 'date',  // This ensures it's a Carbon instance
    ];
}
