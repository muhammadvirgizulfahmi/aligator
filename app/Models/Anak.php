<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'id_wali', 'nama', 'tgl_lahir', 'jenisKelamin',
    'umur', 'tinggiBadan', 'beratBadan','lingkarKepala','rekomendasiSistem','rekomendasiDokter'];
}
