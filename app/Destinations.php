<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destinations extends Model
{
    protected $fillable = [
        'name', 'address', 'type', 'rating'
    ];

    public function destinations(){
        return $this->belongsTo('App\Destinations');
    }
}
