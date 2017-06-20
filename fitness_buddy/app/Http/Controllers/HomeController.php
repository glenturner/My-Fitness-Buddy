<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome (){
        $title = 'Welcome to Fit Buddy!';
        /*return view('welcome', compact('title'));*/
        return view('welcome')->with('title',$title);
    }

    public function addMeals (){
        $title = 'Add your Meal';
        return view('addMeals')->with('title',$title);
    }

    public function displayMeals (){
        $title = 'Display Meals';
        return view('displayMeals')->with('title',$title);

    }
}
