<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
} 

use Illuminate\Http\Request;


// class WelcomeController extends Controller
// {
//     public function hello(){
//         return('Hello World');
//     }

//     public function greeting(){
//         return view('blog.hello', ['name' => 'Khoirr KN']);
//     }
// }




// php artisan make:controller PhotoController 

