<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome (){
        $title = 'Welcome to Fit Buddy!';
        return view('welcome', compact('title'));
    }

    public function addMeals (){
        return view('addMeals');
    }

    public function displayMeals (){
        return view('displayMeals');
    }
}
