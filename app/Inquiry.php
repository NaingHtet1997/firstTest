<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable=['parent_id','name_en','name_sp','email','phone','title_en','title_en','message_en','message_sp','inquiry_type_en','inquiry_type_sp','status'];
}
