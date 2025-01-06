<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    public $timestamps = false; // Disable timestamps
    protected $table = 'jadwal';
    protected $fillable = ['hari', 'jamBuka', 'jamTutup', 'id_dokter'];
    public function dokter()
    {
        return $this->belongsTo(User::class, 'id_dokter');
    }
}
