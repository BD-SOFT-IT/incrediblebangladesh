<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use App\Models\TravelSchedule;
use Illuminate\Http\Request;

class TravelScheduleController extends Controller
{
    // Packages schedules functionality

    public function showAllSchedules()
    {
        return view('back_end.travel.schedules')->with([
            'schedules'    => TravelSchedule::all()
        ]);
    }
    public function showScheduleForm()
    {
        return view('back_end.travel.schedule')->with([
            'travel_packages'   => TravelPackage::all()
        ]);
    }
    public function processScheduleForm(Request $request)
    {
        TravelSchedule::create($request->all());
        return redirect()->back();
//        dd($request->all());
    }
}
