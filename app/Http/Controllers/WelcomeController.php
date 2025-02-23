<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello(){
        return('Hello World');
    }

    public function greeting(){
    return view('blog.hello')
        ->with('name','Khoirrr')
        ->with('occupation','Astronaut');
    // public function greeting(){
    //     return view('blog.hello', ['name' => 'Khoirr KN']);
    // }
    
    }
}



    


