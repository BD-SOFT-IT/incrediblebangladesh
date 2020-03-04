@extends('back_end.layouts.master')

@section('title','Create Blog')

@section('content')
    <div class="container">
        <form action="" method="post" autocomplete="off">
            <div class="row">
                <div class="col-lg-7">
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
                                    <small class="ib-custom-label">Package Sub Title <sup
                                            class="text-danger">*</sup></small>
                                    <input type="text" name="blog_sub_title" id="packageSubTitle"
                                           class="form-control form-control-sm"
                                           placeholder="Coxsbazar such a beautiful place over the world.">
                                </div>
                                <div class="col">
                                    <small class="ib-custom-label">Best Time <sup
                                            class="text-danger">*</sup></small>
                                    <input type="text" name="best_time" id="packageBestTime"
                                           class="form-control form-control-sm" placeholder="January - April">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <small class="ib-custom-label">Blog Description <sup
                                            class="text-danger">*</sup></small>
                                    <textarea name="package_description" id="packageDescription"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">

                    <div class="card">
                        <div class="card-header ib-card-header"><h4>Blog Image Manager</h4></div>
                        <div class="card-body">

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header ib-card-header"><h4>Package Preview</h4></div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col">
                                    <input type="submit" value="Preview" class="btn btn-info text-uppercase">
                                    <input type="submit" value="Submit" class="btn btn-success text-uppercase">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
