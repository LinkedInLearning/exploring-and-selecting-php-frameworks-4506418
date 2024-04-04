<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        return view('welcome',
    [
        'name' => 'John Doe',
        'greeting' => 'Hello, World!'
    ]);
    }
    
}
