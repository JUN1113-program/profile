<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function image(){
        return $this->hasOne("App\PortfolioImage");
    }

    protected $fillable = ['title', 'explanation',"env", "url", "src", "user_id"];
}
