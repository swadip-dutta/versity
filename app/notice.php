<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notice extends Model
{
    function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
