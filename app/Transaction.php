<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Transaction extends Model
{
    protected $fillable = [
        'user_id', 'amount', 'category', 'created_at'
    ]; //temporary
    //

    protected $dates = ['created_at'];
//setAddressAttribute
//setNameAttribute


    public function setCreatedAtAttribute(){
      $this->attributes['created_at'] =  Carbon::now();
    }

    public function user(){
      return $this->belongsTo('App\User');
    }

}
