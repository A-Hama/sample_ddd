<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function items()
    {
      return $this->hasMany('App/Item');
    }

    public function brand()
    {
      return $this->belongsTo('App\Brand')
    }
}
