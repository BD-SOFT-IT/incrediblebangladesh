<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PackageCategory;


class PackageCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function showAllCategory()
    {
        $package_categories = PackageCategory::all();

        return view('back_end.travel.categories')->with([
            'package_categories'   => $package_categories
        ]);
    }

    public function showCategory()
    {
        return view('back_end.travel.category');
    }
    public function processCategory(Request $request)
    {
        $category = new PackageCategory();

        $category->category_title   = $request->category_title;
        $category->category_tag   = $request->category_tag;

        $category->save();

        return redirect()->back()->with('message','Category Created Successfully');
    }

    public function categoryEdit($id)
    {
        $category_update = PackageCategory::findOrFail($id) ;

        return view('back_end.travel.category_update')->with([
            'category_update'  => $category_update
        ]);
    }

    public function categoryDelete($id)
    {
        $category_delete = PackageCategory::findOrFail($id) ;

        $category_delete->delete();

        return redirect()->back()->with('message','Congratulations! Category Deleted Successfully.');
    }

    public function categoryUpdate(Request $request)
    {
        $category_update = PackageCategory::findOrFail($request->id);

        $category_update->category_title = $request->category_title;
        $category_update->category_tag = $request->category_tag;

        $category_update->save();

        return redirect()->intended(route('travel.categories'))->with('message','Category Updated Successfully');

    }
}
