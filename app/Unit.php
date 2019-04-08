<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = ['size','price'];

    public function lockers()
    {
      return $this->hasMany(Locker::class);
    }
}
