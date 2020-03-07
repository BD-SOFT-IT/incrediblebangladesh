<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use App\Models\TravelSchedule;
use App\Models\WhyIncredible;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('front_end.home')->with([
            'why_incredible'    => WhyIncredible::all(),
            'travel_schedules'    => TravelSchedule::all()
        ]);
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
