<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetCategory extends Model
{
    use HasFactory;
    protected $fillable = ['met_categorie_name','met_categorie_description'];


}
