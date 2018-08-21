<?php

namespace App\Http\Controllers;

class ViewController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }
    public function getIndex()
    {
        return view('home');
    }
    public function getRegister()
    {
        return view('user.user_registration');
    }
    public function getUsersList()
    {
        return view('user.user_list');
    }
    public function getInventoryAdd(){
        return view('inventory.inventory_add');
    }
    public function getInventoryCamps(){
        return view('inventory.inventory_camps');
    }
}
