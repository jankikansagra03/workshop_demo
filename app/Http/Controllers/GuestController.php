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
    public function login123q1222()
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
    public function login123()
    {
        return view('login_view');
    }

    public function login_submit(Request $request)
    {
        $username = $request->un;
        $password = $request->pwd;
        // echo $username . "<br>" . $password;
        $data = ['username' => $username, 'password' => $password];
        return view("display_data", compact('data'));
        //return redirect('display_data',['data1'=> 'data']);
    }


    public function register_form_submit(Request $r)
    {

        $data = ['fn' => $r->fn, 'email' => $r->email, 'password' => $r->password];

        return view('show_register_data', compact('data'));
    }
}
