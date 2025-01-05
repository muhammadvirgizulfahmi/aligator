<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    use HasFactory;

    public $timestamps = false; // Disable timestamps
    // The table associated with the model
    protected $table = 'parameter'; // If your table name is 'perkembangan', otherwise adjust accordingly

    // Define the fillable attributes
    protected $fillable = ['umur', 'tinggiBadan', 'beratBadan', 'lingkarKepala'];
}
