<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourProgramImage extends Model
{
     protected $fillable=['tour_program_id','image','status'];

      public function emp(){
        return $this->belongsTo('App\Tourprogram','tour_program_id');
    }
}
