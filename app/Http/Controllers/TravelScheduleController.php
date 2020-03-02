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
    public function editForm($id)
    {
        return view('back_end.travel.edit_schedule')->with([
            'edit_schedule'     => TravelSchedule::findorfail($id),
            'travel_packages'   => TravelPackage::all(),
        ]);
    }
    public function deleteForm($id)
    {
        $delete_schedule = TravelSchedule::findorfail($id);

        $delete_schedule->delete();

        return redirect()->back();
    }
}
