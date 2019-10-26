<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;

class ProfileController extends Controller
{
    public function index(){
        $profile = Profile::find(1);

        return view("profile/index", compact("profile"));
    }
}
