<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    // Showing all e-commerce product function
    public function showAllProduct()
    {
        return view('back_end.e-commerce.products');
    }

    // Showing e-commerce new product function section
    public function showProductForm()
    {
        return view('back_end.e-commerce.product');
    }

    // Processing e-commerce new product to show
    public function processProduct(Request $request)
    {
        dd($request->all());
    }
}
