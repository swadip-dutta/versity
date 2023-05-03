<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    // function role(){

    //     return $this->hasMany(role::class, 'name');
    // }

    function user(){
        return $this->hasOne('App\User', 'role_name');
    }
}
