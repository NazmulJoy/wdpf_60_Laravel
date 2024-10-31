<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    function index(){
        $data = ['title' => 'Home Page2', 'description' => 'lorem ipsum dolor sit amet, consectetur adip'];
        $data['fruits'] = ['Mango','Lichie','Banana','Jackfruit'];
        return view('home', $data); 
    }
    function about(){
        return view('about'); 
    }
    function contact(){
        return view('contact'); 
    }
}
