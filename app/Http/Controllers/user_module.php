<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user_module extends Controller
{
    public function dash_view(){
        return view('user.user_registration');
    }
}
