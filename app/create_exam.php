<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class create_exam extends Model
{
    function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
