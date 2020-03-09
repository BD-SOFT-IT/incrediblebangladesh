<?php

namespace App\Http\Controllers;


use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function showAllBlog()
    {
        return view('back_end.blog.blogs')->with([
            'blogs'     => BlogPost::all()
        ]);
    }
    public function showBlogFrom()
    {
        return view('back_end.blog.blog');
    }

    public function processBlogFrom(Request $request)
    {
        $blog_img = $request->file('blog_img');
        $rename = date('YmdHis').'-'.time().'-'.$blog_img->getClientOriginalName();
        $dir = './images/blog/';
        $blog_img->move($dir,$rename);
        $blog_img = $dir.$rename;

        $blog = new BlogPost();

        $blog->blog_title = $request->blog_title;
        $blog->blog_sub_title = $request->blog_sub_title;
        $blog->blog_description = $request->blog_description;
        $blog->blog_img = $blog_img;

        $blog->save();

        return redirect()->intended(route('travel.blogs'));
    }

    public function editForm($id)
    {
        $blog = BlogPost::findorfail($id);

        return view('back_end.blog.edit_blog')->with([
            'blog'  => $blog
        ]);
    }

    public function updateForm(Request $request)
    {
        $blog_update = BlogPost::findorfail($request->id);

        $blog_update->blog_title    = $request->blog_title;
        $blog_update->blog_sub_title    = $request->blog_sub_title;
        $blog_update->blog_description    = $request->blog_description;

        $blog_update->save();

        return redirect()->intended(route('travel.blogs'));
    }

    public function deleteForm($id)
    {
        $blog = BlogPost::findorfail($id);

        $blog->delete();
        return redirect()->back();
    }
}
