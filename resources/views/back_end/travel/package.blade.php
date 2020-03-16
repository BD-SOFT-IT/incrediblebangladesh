@extends('back_end.layouts.master')

@section('title','Create Package')

@section('content')
    <div class="container">
        <form action="{{ route('travel.package') }}" method="post" >
            <div class="row">
                <div class="col-lg-7">
                    <!-- Package Details section started -->
                    <div class="card">
                        <div class="card-header ib-card-header"><h4>Create Package</h4></div>
                        <div class="card-body">
                            <div class="form-row mb-3">
                                <div class="col">
                                    <small class="ib-custom-label">Package Category <sup
                                            class="text-danger">*</sup></small>
                                    <select name="package_category" id="packageCategory" class="form-control">
                                        <option disable selected> Please Select a Category</option>
                                        @foreach($travel_categories as $category)
                                            <option value="{{ $category->category_tag}}"> {{ $category->category_title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <small class="ib-custom-label">Package Title <sup
                                            class="text-danger">*</sup></small>
                                    <input type="text" name="package_title" id="packageTitle"
                                           class="form-control form-control-sm" placeholder="Exploring Coxsbazar">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <small class="ib-custom-label">Package Sub Title <sup
                                            class="text-danger">*</sup></small>
                                    <input type="text" name="package_sub_title" id="packageSubTitle"
                                           class="form-control form-control-sm"
                                           placeholder="Coxsbazar such a beautiful place over the world.">
                                </div>
                                <div class="col">
                                    <small class="ib-custom-label">Package Best Time <sup
                                            class="text-danger">*</sup></small>
                                    <input type="text" name="package_best_time" id="packageBestTime"
                                           class="form-control form-control-sm" placeholder="January - April">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <small class="ib-custom-label">Package Availability <sup
                                            class="text-danger">*</sup></small>
                                    <input type="text" name="package_availability" class="form-control form-control-sm" placeholder="April - September">
                                </div>
{{--                                <div class="col">--}}
{{--                                    <small class="ib-custom-label">Package Max Member <sup--}}
{{--                                            class="text-danger">*</sup></small>--}}
{{--                                    <input type="number" name="package_max_member" class="form-control form-control-sm" placeholder="20">--}}
{{--                                </div>--}}
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <small class="ib-custom-label">Package Location <sup
                                            class="text-danger">*</sup></small>
                                    <input type="text" name="package_location" class="form-control form-control-sm" placeholder="Dhaka,Old Dhaka, Mongla, Sundharba">
                                </div>
                                <div class="col">
                                    <small class="ib-custom-label">Package Attraction <sup
                                            class="text-danger">*</sup></small>
                                    <input type="text" name="package_attraction" class="form-control form-control-sm" placeholder="Dhaka,Old Dhaka, Mongla, Sundharba">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <small class="ib-custom-label">Package Duration <sup
                                            class="text-danger">*</sup></small>
                                    <input type="text" name="package_duration" id="packageDuration"
                                           class="form-control form-control-sm" placeholder="20 Days / 21 Nights">
                                </div>
                                <div class="col">
                                    <small class="ib-custom-label">Package Price <sup
                                            class="text-danger">*</sup></small>
                                    <input type="text" name="package_price" id="packagePrice"
                                           class="form-control form-control-sm" placeholder="1,000,000 ৳ per head">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <small class="ib-custom-label">Package Description <sup
                                            class="text-danger">*</sup></small>
                                    <textarea name="package_description" id="packageDescription"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header ib-card-header"><h4>Package Features</h4></div>
                        <div class="card-body">
                            <div class="input-group">
                               <span class="input-group-btn">
                                 <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                   <i class="fa fa-picture-o"></i> Choose
                                 </a>
                               </span>
                                <input id="thumbnail" class="form-control" type="text" name="package_img">
                            </div>
                            <img id="holder" style="margin-top:15px;max-height:100px;">

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header ib-card-header"><h4>Package Image Manager</h4></div>
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
