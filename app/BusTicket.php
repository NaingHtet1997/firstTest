<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusTicket extends Model
{
    protected $fillable =['name_en','name_sp','from_en','from_sp','to_en','to_sp','time','image','price','status'];
}
