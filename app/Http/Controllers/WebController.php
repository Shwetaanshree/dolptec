<?php

namespace App\Http\Controllers;

class WebController extends Controller
{
    public function index()
    {            
        return view('home-page.index');
    }

    public function devops()
    {            
        return view('home-page.devops');
    }

    public function finops()
    {            
        return view('home-page.finOps');
    }

    public function errorpage()
    {
        return view('error.404');
    }


        public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function thankyou()
    {
        return view('thankyou');
    }

}
