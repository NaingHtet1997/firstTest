<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarTicket extends Model
{
      protected $fillable=['car_type_en','car_type_sp','image','seat_no','journey_type_en','journey_type_sp','time','price','remark','status'];
}
