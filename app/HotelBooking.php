<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelBooking extends Model
{
   protected $fillable=['name_en','name_sp','address_en','address_sp','desc_en','desc_sp','type_en','type_sp','price',
   'image','remark','status'];
}
