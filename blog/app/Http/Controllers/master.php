<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class master extends Controller
{
    public function master(){
        return view('frontend/master');
    }
    public function blogPage(){
        return view('frontend/blog');
    }
}
