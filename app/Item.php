<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function shop()
    {
      return $this->belongsTo('App\Shop');
    }

    public function singleItem()
    {
      return $this->hasMany('App\SingleItem');
    }
}
