<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'guestname', 'password'
    ];

    public function setpasswordAttribute($value)
{
    // $this->attributes['password'] = bcrypt($value ?: str_random(6));
    $this->attributes['password'] = $value ?: str_random(6);
    
}
}
