<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('userDashboard');
    }
    public function adminHome(){
        return view('adminDashboard');
    }
    public function managerHome(){
        return view('managerDashboard');
    }
}
