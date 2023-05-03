<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllClass extends Model
{
    function user(){

        return $this->belongsTo(User::class, 'user_id');
    }
}
