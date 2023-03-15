<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {    
        return View::exists('user') ? view('user') : abort(404);
    }

    public function show()
    {      
        return View::exists('welcome') ? view('welcome') : abort(404);
    }
}
