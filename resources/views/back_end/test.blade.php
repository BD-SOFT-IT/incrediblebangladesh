@extends('front_end.layouts.master')

@section('title', 'Package Details')

@section('content')
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-8">
                <div class="ib-package-story-wrapper">
                    <div class="ib-content-header px-4 py-4">
                        <h5>{{ $request->package_title }}</h5>
                        <span>{{ $request->package_sub_title }}</span>
                        <a href="#" class="ib-btn">Book Now</a>

                        <div class="ib-seat-counter">
                            <i class="fas fa-chair"></i>
                            <h5>{{ $request->package_max_member }}</h5>
                        </div>
                    </div>


                    <div class="ib-content-description px-4 py-4">
                        <p>{!! $request->package_description !!}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 ib-px-none">
                <div class="ib-content-sub-header px-4 py-4">
                    <h6>More About Exploring Bangladesh</h6>
                    <div class="ib-side-img-wrapper my-3">
                        <img class="ib-side-img" src="{{ asset('back_end/img/unsplash/demo.jpg') }}" alt="" width="120">
                        <h4 class="ib-package-cost"><b>৳</b> 50,500</h4>
                    </div>
                    <h6>Location :             <span> {{ $request->package_location }}</span></h6>
                    <h6>Duration :        <span> {{ $request->package_duration }}</span></h6>
                    <h6>Availability :    <span> January - December</span></h6>
                    <h6>Attractions :     <span> {{ $request->package_attraction }}</span></h6>
                    <h6>Best Time To Go :      <span> {{ $request->package_best_time }}</span></h6>
                    <h6>Next Schedule :    <span> 20-04-2020</span></h6>
                </div>
            </div>
        </div>
    </div>
@endsection
