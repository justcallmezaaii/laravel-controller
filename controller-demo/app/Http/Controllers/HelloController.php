<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function greet()
    {
        return "Hello! This is my first controller in Laravel.";
    }
}
