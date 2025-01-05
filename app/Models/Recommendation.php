<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    use HasFactory;

    /* 
    * @var array<int, string>
     */
    protected $fillable = [
        'id_anak',
        'recommendation', // Add any other fields that should be mass assignable
    ];
}
