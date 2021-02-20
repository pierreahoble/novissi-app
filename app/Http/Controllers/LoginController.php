<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.login.login');
    }





    public function registerView()
    {
        return view('admin.login.register');
    }


    public function registerAdd(REQUEST $request)
    {
        
    }













}
