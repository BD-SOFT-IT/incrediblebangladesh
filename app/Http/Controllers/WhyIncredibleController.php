<?php

namespace App\Http\Controllers;

use App\Models\WhyIncredible;
use Illuminate\Http\Request;

class WhyIncredibleController extends Controller
{

    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function showForm()
    {
        return view('back_end.why_incredible')->with([
            'why_incredible'    => WhyIncredible::all()->sortByDesc('created_at')
        ]);
    }

    public function processForm(Request $request)
    {

        WhyIncredible::create($request->all());

        return redirect()->back()->with('message','Your post is posted successfully.');
    }

    public function editFrom($id)
    {
        return view('back_end.edit_why')->with([
            'edit_why'  => WhyIncredible::findOrFail($id)
        ]);
    }
    public function updateFrom(Request $request)
    {
        $update_why = WhyIncredible::findOrFail($request->id);

        $update_why->why_title  = $request->why_title;
        $update_why->why_des  = $request->why_des;

        $update_why->save();

        return redirect()->back();
    }

    public function deleteFrom($id)
    {
        $delete_why = WhyIncredible::findOrFail($id);

        $delete_why->delete();

        return redirect()->back();
    }
}
