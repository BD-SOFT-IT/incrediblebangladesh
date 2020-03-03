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
        return redirect()->intended(route('travel.schedules'));
    }
    public function editForm($id)
    {
        return view('back_end.travel.edit_schedule')->with([
            'edit_schedule'     => TravelSchedule::findorfail($id),
        ]);
    }
    public function updateForm(Request $request)
    {
        $update_schedule = TravelSchedule::findorfail($request->id);

        $update_schedule->package_id = $request->package_id;
        $update_schedule->package_schedule = $request->package_schedule;
        $update_schedule->package_schedule_time = $request->package_schedule_time;
        $update_schedule->package_max_member = $request->package_max_member;
        $update_schedule->package_ex_description = $request->package_ex_description;

        $update_schedule->save();

        return redirect()->intended(route('travel.schedules'));
    }

    public function deleteForm($id)
    {
        $delete_schedule = TravelSchedule::findorfail($id);

        $delete_schedule->delete();

        return redirect()->back();
    }
}
