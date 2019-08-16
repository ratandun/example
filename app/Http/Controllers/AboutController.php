<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    

    public function example() {
    	return view('about');
    }

    public function contact() {
    	return view('contact');
    }
}
