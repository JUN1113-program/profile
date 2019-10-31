<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    protected $fillable = ['image',"user_id"];
}
