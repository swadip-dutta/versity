<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    function notice(){
        return $this->hasOne(notice::class, 'category_id');
    }
}
