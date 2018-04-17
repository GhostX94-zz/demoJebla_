<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
      return view('home');
    }

    public function login(){
      return view('login');
    }

    public function account_details(){
      return view('account-details');
    }

    public function account_settings(){
      return view('account-settings');
    }

    public function active_projects(){
      return view('active-projects');
    }

    public function analytics(){
      return view('analytics');
    }

    public function boards(){
      return view('boards');
    }
}
