@extends('back_end.layouts.master')

@section('title','Create Blog')

@section('content')
    <div class="container">
        <form action="{{ route('travel.blog') }}" method="post" autocomplete="off" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <!-- Package Details section started -->
                    <div class="card">
                        <div class="card-header ib-card-header"><h4>Create Blog</h4></div>
                        <div class="card-body">
                            <div class="form-row mb-3">
                                <div class="col">
                                    <small class="ib-custom-label">Blog Title <sup
                                            class="text-danger">*</sup></small>
                                    <input type="text" name="blog_title" id="packageTitle"
                                           class="form-control form-control-sm" placeholder="Two Days for Bangladesh">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <small class="ib-custom-label">Blog Sub Title <sup
                                            class="text-danger">*</sup></small>
                                    <input type="text" name="blog_sub_title" id="packageSubTitle"
                                           class="form-control form-control-sm"
                                           placeholder="Coxsbazar such a beautiful place over the world.">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <small class="ib-custom-label">Blog Feature Image<sup
                                            class="text-danger">*</sup></small>
                                    <input type="file" name="blog_img" id="packageSubTitle"
                                           class="form-control form-control-sm"
                                           placeholder="Coxsbazar such a beautiful place over the world.">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <small class="ib-custom-label">Blog Description <sup
                                            class="text-danger">*</sup></small>
                                    <textarea name="blog_description" id="packageDescription"></textarea>
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
