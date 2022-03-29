<?php

namespace App\Models;

use App\Models\Met;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuDay extends Model
{
    use HasFactory;
    protected $fillable = [
       'type_met',
       'type_days',
       'met_menu_days_id',
    ];


    public function met() {
        return $this->belongsTo(Met::class,'met_menu_days_id','met_id');
    }
    // $table->id('menu_days_id');
    // $table->string('type_met');
    // $table->string('type_days');
    // $table->unsignedBigInteger('met_menu_days_id');
    // $table->timestamps();
    // $table->foreign('met_menu_days_id')->references('met_id')->on('mets')->onDelete('cascade');
}
