<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('front_end.home');
    }
    public function guide()
    {
        return view('front_end.guide');
    }
    public function showLoginForm()
    {
        return view('front_end.auth.user_login');
    }
    public function makeReservation()
    {
        return view('front_end.reservation');
    }
    public function showBlog()
    {
        return view('front_end.tour_blog');
    }
}
