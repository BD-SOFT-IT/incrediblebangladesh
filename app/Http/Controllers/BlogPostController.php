<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function showAllBlog()
    {
        return view('back_end.blog.blogs');
    }
    public function showBlogFrom()
    {
        return view('back_end.blog.blog');
    }
    public function processBlogFrom(Request $request)
    {

    }
    public function showBlogReview()
    {
        return view('back_end.blog.blog_review');
    }

    public function testlogin()
    {
        return view('back_end.auth.admin_login');
    }
}
