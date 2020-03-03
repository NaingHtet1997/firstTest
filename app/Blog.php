<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable =['title_en','title_sp','subtitle_en','subtitle_sp','image','author_en','author_sp','desc_en','desc_sp','status','created_by'];
}
