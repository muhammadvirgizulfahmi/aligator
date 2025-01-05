<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkembangan extends Model
{
    public $timestamps = false; // Disable timestamps
    // The table associated with the model
    protected $table = 'perkembangan'; // If your table name is 'perkembangan', otherwise adjust accordingly

    // Define the fillable attributes
    protected $fillable = ['id_anak', 'umur', 'tinggiBadan', 'beratBadan', 'lingkarKepala'];
}
