<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function userHome()
    {
        return view('user.home');
    }

    public function adminHome()
    {
        return view('admin.home');
    }
  
    public function managerHome()
    {
        return view('manager.home');
    }

    public function clientHome()
    {
        return view('home');
    }

}