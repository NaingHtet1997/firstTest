<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasicSetting extends Model
{
    protected $fillable =['sitename_en','sitename_sp','email','phone','address_en','address_sp','about_en','about_sp','google_map','copyright'];
}
