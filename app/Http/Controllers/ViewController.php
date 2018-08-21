<?php

namespace App\Http\Controllers;

class ViewController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }
    public function getRegister()
    {
        return view('user.user_registration');
    }
    public function getUsersList()
    {
        return view('user.user_list');
    }
}
