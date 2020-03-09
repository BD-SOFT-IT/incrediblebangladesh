@extends('front_end.layouts.master')

@section('title','User Registration Panel')

@section('content')
    <section class="login_box_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" style="width: 570px;height: 570px" src="{{ asset('front_end/img/profile.png') }}" alt="">
                        <div class="hover">
                            <h4>Already Have An Account?</h4>
                            <p>There are advances being made in science and technology everyday, and a good example of
                                this is the</p>
                            <a class="primary-btn" href="{{'login'}}">Login Here</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Registration</h3>
                        <form class="row login_form" method="POST" action="{{ route('register') }}" id="contactForm"
                              novalidate="novalidate">
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" placeholder="Full Name"
                                       value="{{ old('name') }}" required autocomplete="name" autofocus onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="name" name="email" placeholder="Email"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="name" name="password" placeholder="Password" required autocomplete="new-password"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="Address" required
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'">
                            </div>
                            <div class="col-md-12 form-group" hidden>
                                <input type="number" class="form-control" id="is_admin" name="is_admin" required value="{{ 0 }}">
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="primary-btn">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
