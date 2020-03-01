@extends('front_end.layouts.master')

@section('title','Let us guide')

@section('content')
    <section class="section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="ib-guide-address-wrapper">
                        <h5 class="mb-3">Mailing Address</h5>
                        <div class="ib-guide-address">
                            <ul>
                                <li>Brockport Spencerport Road, Brockport New York-14420, USA.</li>
                                <li>+172 22 555888999</li>
                                <li>support@incrediblebangladesh.com</li>
                                <li>
                                    <a href="#" target="_blank" class="mr-1"><i
                                            class="ib-footer-icon fa fa-facebook-square"></i></a>
                                    <a href="#" target="_blank" class="mr-1"><i
                                            class="ib-footer-icon fa fa-twitter-square"></i></a>
                                    <a href="#" target="_blank" class="mr-1"><i
                                            class="ib-footer-icon fa fa-youtube-square"></i></a>
                                    <a href="#" target="_blank" class="mr-1"><i
                                            class="ib-footer-icon fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h5 class="mb-3">Leave Your Massage</h5>
                    <form action="" method="post" autocomplete="off">
                        <div class="ib-guide-form">
                            <div class="form-row mb-2">
                                <div class="col">
                                    <small>Give your message a subject <sup>*</sup></small>
                                    <input type="text" name="" id="" class="form-control" placeholder="Air ticket booking problem">
                                </div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col">
                                    <small>First Name <sup>*</sup></small>
                                    <input type="text" name="" id="" class="form-control form-control-sm" placeholder="Enter your First name">
                                </div>
                                <div class="col">
                                    <small>Last Name <sup>*</sup></small>
                                    <input type="text" name="" id="" class="form-control form-control-sm" placeholder="Enter your Last name">
                                </div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col">
                                    <small>E-mail Address <sup>*</sup></small>
                                    <input type="email" name="" id="" class="form-control form-control-sm" placeholder="Enter your e-mail">
                                </div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col">
                                    <small>Phone Number <sup>*</sup></small>
                                    <input type="tel" name="" id="phone" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col">
                                    <small>Type your message <sup>*</sup></small>
                                    <textarea name="" id="" class="form-control" cols="30" rows="5" placeholder="Hello, I am from Bangladesh and I want to ..."></textarea>
                                </div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col">
                                    <input type="submit" class="btn btn-success btn-success-extended" value="Send">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
