<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{

    public function user(){ //this  many has one (One To Many inverse relationship)
        return $this->belongsTo('App\User');
    }

}
