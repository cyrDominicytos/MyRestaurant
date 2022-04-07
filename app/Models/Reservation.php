<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
          "reservation_people",
          "reservation_days",
          "reservation_datail",
          "reservation_type",
          'reservation_status',
          "reservation_user_id"
    ];

}
