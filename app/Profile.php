<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    protected $fillable = ['age', 'introduction',"career", "certification", "skill", "goal", "user_id"];
}
