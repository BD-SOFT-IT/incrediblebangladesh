<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\TravelPackage;
use App\Models\TravelSchedule;
use App\Models\WhyIncredible;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $awesome_travel = \DB::table('travel_schedules')
            ->join('travel_packages', 'travel_schedules.package_id','=','travel_packages.id')
            ->select('travel_packages.*','travel_schedules.*')
            ->where('travel_packages.package_category','=','awesome')
            ->get();

        $feature_travel = \DB::table('travel_schedules')
            ->join('travel_packages', 'travel_schedules.package_id','=','travel_packages.id')
            ->select('travel_packages.*','travel_schedules.*')
            ->where('travel_packages.package_category','=','feature')
            ->get();
        $day_travel = \DB::table('travel_schedules')
            ->join('travel_packages', 'travel_schedules.package_id','=','travel_packages.id')
            ->select('travel_packages.*','travel_schedules.*')
            ->where('travel_packages.package_category','=','day')
            ->get();
        $coming_travel = \DB::table('travel_schedules')
            ->join('travel_packages', 'travel_schedules.package_id','=','travel_packages.id')
            ->select('travel_packages.*','travel_schedules.*')
            ->where('travel_packages.package_category','=','upcoming')
            ->get();

        return view('front_end.home')->with([
            'why_incredible'        => WhyIncredible::all(),

            'travel_schedules'      => $awesome_travel,
            'feature_travel'        => $feature_travel,
            'day_travel'            => $day_travel
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
        return view('front_end.tour_blog')->with([
            'blogs'     => BlogPost::all()
        ]);
    }

    public function showDetailsBlog($id)
    {
        $blog = BlogPost::findorfail($id);

        return view('front_end.show_blog')->with([
            'blog'  => $blog
        ]);
    }

    public function awesomeHolidayPackage($id)
    {
        $package = TravelSchedule::findorfail($id);

        return view('front_end.single_package')->with([
            'package'   => $package
        ]);
    }

    public function allAwesome()
    {
        $awesome_travel = \DB::table('travel_schedules')
            ->join('travel_packages', 'travel_schedules.package_id','=','travel_packages.id')
            ->select('travel_packages.*','travel_schedules.*')
            ->where('travel_packages.package_category','=','awesome')
            ->get();

        return view('front_end.tour.awesome')->with([
            'awesome'   => $awesome_travel
        ]);
    }
    public function allDaily()
    {
        $day_travel = \DB::table('travel_schedules')
            ->join('travel_packages', 'travel_schedules.package_id','=','travel_packages.id')
            ->select('travel_packages.*','travel_schedules.*')
            ->where('travel_packages.package_category','=','day')
            ->get();

        return view('front_end.tour.day')->with([
            'day'   => $day_travel
        ]);
    }
    public function allFeature()
    {
        $feature_travel = \DB::table('travel_schedules')
            ->join('travel_packages', 'travel_schedules.package_id','=','travel_packages.id')
            ->select('travel_packages.*','travel_schedules.*')
            ->where('travel_packages.package_category','=','feature')
            ->get();

        return view('front_end.tour.feature')->with([
            'feature'   => $feature_travel
        ]);
    }
    public function allUpcoming()
    {
        $coming_travel = \DB::table('travel_schedules')
            ->join('travel_packages', 'travel_schedules.package_id','=','travel_packages.id')
            ->select('travel_packages.*','travel_schedules.*')
            ->where('travel_packages.package_category','=','upcoming')
            ->get();

        return view('front_end.tour.upcoming')->with([
            'upcoming'  => $coming_travel
        ]);

	}
    public function hotelResort()
    {
        return view('front_end.form.hotel-resort');
    }

    public function hotelResortProcess()
    {
        //later
    }

    public function busTicket()
    {
        return view('front_end.form.bus-ticket');
    }

    public function busTicketProcess()
    {
        //later
    }

    public function shipTicket()
    {
        return view('front_end.form.ship-ticket');
    }

    public function shipTicketProcess()
    {
        //later
    }

    public function trainTicket()
    {
        return view('front_end.form.train-ticket');
    }

    public function trainTicketProcess()
    {
        //later
    }

    public function airTicket()
    {
        return view('front_end.form.air-ticket');
    }

    public function airTicketProcess()
    {
        //later
    }

    public function carRent()
    {
        return view('front_end.form.car-rent');
    }

    public function carRentProcess()
    {
        //later
    }

    public function visaSupport()
    {
        return view('front_end.form.visa-support');
    }

    public function visaSupportProcess()
    {
        //later

    }
}
