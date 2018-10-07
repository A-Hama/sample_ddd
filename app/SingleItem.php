<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SingleItem extends Model
{
  public function item()
  {
    return $this->belongsTo('App\Item');
  }

  public function colors()
  {
    return $this->hasMany('App\Color');
  }

  public function sizes()
  {
    return $this->hasMany('App\Size');
  }
}
