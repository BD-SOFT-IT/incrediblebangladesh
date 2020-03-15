@extends('front_end.layouts.master')

@section('title', 'Blog Details')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="col-lg-12">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{ asset($blog->blog_img) }}" alt="">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 blog_details">
                        <h2>{{ $blog->blog_title }}</h2>
                        <p class="excert">{!! $blog->blog_description !!}</p>
                    </div>

                </div>

                <div class="comment-form">
                    <h4>Leave a Reply</h4>
                    <form>
                        <div class="form-group form-inline">
                            <div class="form-group col-lg-6 col-md-6 name">
                                <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Enter Name'">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 email">
                                <input type="email" class="form-control" id="email" placeholder="Enter email address"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'Subject'">
                        </div>
                        <div class="form-group">
                                <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege"
                                          onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                        </div>
                        <a href="#" class="primary-btn submit_btn">Post Comment</a>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">


                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Popular Posts</h3>
                        <div class="media post_item">
                            <img src="img/blog/popular-post/post1.jpg" alt="post">
                            <div class="media-body">
                                <a href="blog-details.html">
                                    <h3>Space The Final Frontier</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="img/blog/popular-post/post2.jpg" alt="post">
                            <div class="media-body">
                                <a href="blog-details.html">
                                    <h3>The Amazing Hubble</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="img/blog/popular-post/post3.jpg" alt="post">
                            <div class="media-body">
                                <a href="blog-details.html">
                                    <h3>Astronomy Or Astrology</h3>
                                </a>
                                <p>03 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="img/blog/popular-post/post4.jpg" alt="post">
                            <div class="media-body">
                                <a href="blog-details.html">
                                    <h3>Asteroids telescope</h3>
                                </a>
                                <p>01 Hours ago</p>
                            </div>
                        </div>
                        <div class="br"></div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
