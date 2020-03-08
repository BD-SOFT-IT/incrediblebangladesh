@extends('back_end.layouts.master')

@section('title','Edit Blog')

@section('content')
    <div class="container">
        <form action="{{ route('blog.update') }}" method="post" autocomplete="off">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <!-- Package Details section started -->
                    <div class="card">
                        <div class="card-header ib-card-header"><h4>Edit Blog</h4></div>
                        <div class="card-body">
                            <div class="form-row mb-3">
                                <div class="col">
                                    <small class="ib-custom-label">Blog Title <sup
                                            class="text-danger">*</sup></small>
                                    <input type="text" name="blog_title" id="packageTitle"
                                           class="form-control form-control-sm" value="{{ $blog->blog_title }}">
                                    <input type="hidden" name="id" value="{{ $blog->id }}">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <small class="ib-custom-label">Blog Sub Title <sup
                                            class="text-danger">*</sup></small>
                                    <input type="text" name="blog_sub_title" id="packageSubTitle"
                                           class="form-control form-control-sm"
                                           value="{{ $blog->blog_sub_title }}">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <small class="ib-custom-label">Blog Description <sup
                                            class="text-danger">*</sup></small>
                                    <textarea name="blog_description" id="packageDescription">{{ $blog->blog_description }}</textarea>
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
