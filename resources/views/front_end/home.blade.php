@extends('front_end.layouts.master')

@section('title','Welcome to home')

@section('content')
    <!-- About us section started -->
    <section class="section_gap">
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

    <!-- start features Area -->
    <section class="features-area section_gap">
        <div class="container">
            <div class="row features-inner">
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="{{ asset('front_end/img/features/f-icon1.png') }}" alt="">
                        </div>
                        <h6>Free Delivery</h6>
                        <p>Free Shipping on all order</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="{{ asset('front_end/img/features/f-icon2.png') }}" alt="">
                        </div>
                        <h6>Return Policy</h6>
                        <p>Free Shipping on all order</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="{{ asset('front_end/img/features/f-icon3.png') }}" alt="">
                        </div>
                        <h6>24/7 Support</h6>
                        <p>Free Shipping on all order</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="{{ asset('front_end/img/features/f-icon4.png') }}" alt="">
                        </div>
                        <h6>Secure Payment</h6>
                        <p>Free Shipping on all order</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end features Area -->
@endsection
