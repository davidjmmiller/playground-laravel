<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Login page
    public function index()
    {
        return view('login');
    }

    // Login page
    public function forgot()
    {
        return view('forgot');
    }
}
