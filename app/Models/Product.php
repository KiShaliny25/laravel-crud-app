<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // இந்த 3 Columns-ஐ மட்டும் டேட்டாபேஸில் சேமிக்க அனுமதிக்கிறோம்
    protected $fillable = [
        'name',
        'weight',
        'price',
    ];
}
