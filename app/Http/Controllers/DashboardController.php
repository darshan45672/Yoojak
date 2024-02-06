<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }
    public function placed(){
        return view('placedStudents');
    }
    
    public function placementUpdates(){
        return view('placementUpdates');
    }

    public function contact(){
        return view('contact');
    }

}
