<?php

namespace App\Models;

use App\Models\MetCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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


    public function category() {
        return $this->belongsTo(MetCategory::class,'categorie_met_id','met_categorie_id');
    }
}
