@extends('front_end.layouts.master')

@section('title','Welcome to home')

@section('content')
    <!-- About us section started -->
    <section class="section_gap_75">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="ib-about-description-wrapper">
                        <div class="form-row">
{{--                            <div class="col-1"><i class="fa fa-users"></i></div>--}}
                            <div class="col">
                                <h3 class="mb-3">Story of us</h3>
                                <div class="ib-story-box">
                                    <p class="ib-story-us text-center">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur autem, blanditiis dolor dolorem enim et harum itaque laudantium molestias natus nesciunt odio quam reiciendis sit, sunt ut! Excepturi, inventore.
                                    </p>
                                    <p class="ib-story-us text-center">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur autem, blanditiis dolor dolorem enim et harum itaque laudantium molestias natus nesciunt odio quam reiciendis sit, sunt ut! Excepturi, inventore.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7" style="background-color: #1b1e21">
                    <div class="ib-custom-plan-wrapper">
                        <div class="cards-column column-0 mt-5">
                            <div class="cards card-color-0">
                                <div class="border"></div>
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/53148/deathtostock-00.jpg" />
                                <h2>Give us your custom trip plan</h2>
                                <div class="ib-custom-date">
                                    <input type="text" id="doCustomDate" class="ib-date-custom d-block mb-3" readonly>
                                    <a href="#" class="ib-custom-plan" target="_blank">Create Your Trip</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About us section end-->

    <!-- start why incredible features Area -->
    <section class="features-area">
        <div class="container">
            <h2 class="ib-headline text-center">Why Incredible Bangladesh</h2>
            <span class="ib-headline-img"><img src={{ asset('front_end/img/headline.png') }} alt=""></span>
            @foreach($why_incredible->chunk(4) as $chunk)
                <div class="row features-inner mt-5">
                    @foreach($chunk as $why)
                            <!-- single features -->
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single-features">
                                    <div class="f-icon">
                                        <img src="{{ asset('front_end/img/features/f-icon1.png') }}" alt="">
                                    </div>
                                    <h6>{{ $why->why_title }}</h6>
                                    <p>{{ $why->why_des }}</p>
                                </div>
                            </div>
                            <!-- single features -->
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
    <!-- end why incredible features Area -->


    <!-- Start awesome holiday package area -->
    <section class="section_gap_75">
        <div class="container">
            <h2 class="ib-headline text-center">Awesome Holiday Package</h2>
            <span class="ib-headline-img"><img src={{ asset('front_end/img/headline.png') }} alt=""></span>
            <div class="row">
                <div class="col-lg-12 mx-auto test">
                    <div class="owl-carousel owl-theme">
                        @foreach($travel_schedules as $p)
                            <div class="item mt-5">
                                <div class="ib-aw-holiday">
                                    <div class="ib-aw-holiday-left">
                                        <img src="{{ asset($p->package->package_img) }}" alt="" height="240">
                                        <h4 class="mt-4">{{ date('d M, Y',strtotime($p->package_schedule)) }}</h4>
                                        <h3>{{ date('h:i:s',strtotime($p->package_schedule_time)) }}</h3>
                                    </div>
                                    <div class="ib-aw-holiday-right">
                                        <h4><a href="{{ route('single.package',$p->package_id) }}">{{ $p->package->package_title }}</a></h4>
                                        <span>{{ $p->package->package_sub_title }}</span>
                                        <h5>{{ $p->package->package_price }}</h5>
                                        <p class="mt-4">{!! Str::limit($p->package->package_description,150) !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End awesome holiday package area -->

    <!-- Start Feature holiday package area -->
{{--    <section class="">--}}
{{--        <div class="container">--}}
{{--            <h2 class="ib-headline text-center">Feature Holiday Package</h2>--}}
{{--            <span class="ib-headline-img"><img src={{ asset('front_end/img/headline.png') }} alt=""></span>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 mx-auto test">--}}
{{--                    <div class="">--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- End Feature holiday package area -->

@endsection
