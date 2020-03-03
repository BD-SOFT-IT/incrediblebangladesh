<?php

namespace App\Http\Controllers;

use App\Models\PackageCategory;
use App\Models\TravelPackage;
use Illuminate\Http\Request;

class TravelPackageController extends Controller
{
    public function showAllPackages()
    {
        return view('back_end.travel.packages');
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

//        $a = TravelPackage::create($request->all());
//
//        return redirect()->back();
        return view('back_end.test')->with([
            'request'   => $request
        ]);
    }
}
