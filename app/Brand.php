<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function shop()
    {
      return $this->hasMany('App\Shop');
    }
}
