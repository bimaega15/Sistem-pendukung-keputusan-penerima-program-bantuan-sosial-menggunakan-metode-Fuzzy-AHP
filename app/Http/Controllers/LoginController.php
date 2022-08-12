<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('checklogin');
    }
    public function index()
    {
        return view('login');
    }
}
