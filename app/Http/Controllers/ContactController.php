<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactController extends Controller
{
    public function index(){
        return view("contact/index");
    }

    public function create(){
        return view("contact/create");
    }

}
