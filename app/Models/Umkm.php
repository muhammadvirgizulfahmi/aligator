<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'modal', 'pemilik', 'alamat', 'website', 'email', 'rating', 'kabkota_id', 'kategori_umkm_id', 'pembina_id'];
}
