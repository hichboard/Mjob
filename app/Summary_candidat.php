<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Summary_candidat extends Model
{


    public function user(){ //this  many has one (One To Many inverse relationship)
        return $this->hasOne('App\User');
    }

}
