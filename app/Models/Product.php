<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'KodeBarang',
        'NamaBarang',
        'JenisVarian',
        'Qty',
        'HargaJual',
        '_token', // Add _token to the fillable properties
    ];
}
