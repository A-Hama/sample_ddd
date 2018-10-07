<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function shops()
    {
      return $this->hasMany('App\Shop');
    }
}
