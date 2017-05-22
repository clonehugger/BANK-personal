<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id', 'amount', 'category', 'created_at'
    ]; //temporary
    //

    protected $dates = ['created_at'];
//setAddressAttribute
//setNameAttribute


    public function user(){
      return $this->belongsTo('App\User');
    }

}
