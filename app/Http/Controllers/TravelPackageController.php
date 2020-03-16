<?php

namespace App\Http\Controllers;

use App\Models\PackageCategory;
use App\Models\TravelPackage;
use App\Models\TravelSchedule;
use Illuminate\Http\Request;

class TravelPackageController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function showAllPackages()
    {
        return view('back_end.travel.packages')->with([
            'packages'  => TravelSchedule::all()
        ]);
    }

    // Package functions
    public function showPackageForm()
    {
        $travel_categories = PackageCategory::all();
        return view('back_end.travel.package')->with([
            'travel_categories'    => $travel_categories
        ]);
    }

    public function processPackageForm(Request $request)
    {

        TravelPackage::create($request->all());

        return redirect()->back()->with('message','Package created successfully.');
        
    }
}
