<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Common.pages.index');
    }
    public function login()
    {
        return view('Common.pages.login');
    }
}
