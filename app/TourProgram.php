<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourProgram extends Model
{
     protected $fillable=['title_en','title_sp','subtitle_en','subtitle_sp','author_en','author_sp','desc_en','desc_sp','thumbnail','status'];

      public function photos(){
        return $this->hasMany('App\TourProgramImage','employer_id');
    }
}
