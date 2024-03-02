<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    public function login()
    {
        return view('login_view');
    }
    public function register()
    {
        return view('register_view');
    }
    public function gallery()
    {
        return view('gallery_view');
    }
}
