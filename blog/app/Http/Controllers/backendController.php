<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class backendController extends Controller
{
    public function backend(){
        return view('backend/dashboard');
    }    
    
    public function create(){
        return view('backend/create');
    }
}
