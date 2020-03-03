<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AirTicket extends Model
{
   protected $fillable =['name_en','name_sp','image','from_
   en','from_sp','to_en','to_sp','journey_type_en','journey_type_sp','time','price'];
}
