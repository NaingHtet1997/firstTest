<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TravelInspiration extends Model
{
      protected $fillable=['title_en','title_sp','subtitle_en','subtitle_sp','desc_en','desc_sp','thumbnail','status'];
}
