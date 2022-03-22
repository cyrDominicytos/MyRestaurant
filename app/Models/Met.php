<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Met extends Model
{
    use HasFactory;
    protected $fillable = [
        'met_name',
        'met_description',
        'met_price',
        'met_image',
        'met_status',
        'met_type',
        'met_day',
        'categorie_met_id',
    ];

}
