<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'user_id', 'title',
    ]; //temporary
    //


    public function user(){
      return $this->belongsTo('App\User');
    }
}
