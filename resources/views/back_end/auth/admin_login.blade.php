<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('back_end/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('back_end/css/components.css') }}">
</head>

<body>
<div id="app">
    <section class="section">
        <div class="d-flex flex-wrap align-items-stretch py-2">
            <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white pt-5">
                <div class="p-4 m-3">
                    <h4 class="text-dark font-weight-normal">Welcome to<span class="font-weight-bold"> Incredible Bangladesh.</span></h4>
                    <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="" >
                        @csrf
                        <div class="form-group ib-form-group-rewrite">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control form-control-sm" name="email" tabindex="1" required autofocus>
                            <div class="invalid-feedback">
                                Please fill in your email
                            </div>
                        </div>

                        <div class="form-group ib-form-group-rewrite">
                            <div class="d-block">
                                <label for="password" class="control-label">Password</label>
                            </div>
                            <input id="password" type="password" class="form-control form-control-sm" name="password" tabindex="2" required>
                            <div class="invalid-feedback">
                                please fill in your password
                            </div>
                        </div>

{{--                        <div class="form-group ib-form-group-rewrite">--}}
{{--                            <div class="custom-control custom-checkbox">--}}
{{--                                <input type="checkbox" class="custom-control-input" tabindex="3" id="remember-me" name="remember" {{ old('remember') ? 'checked' : ''}}>--}}
{{--                                <label class="custom-control-label" for="remember-me">Remember Me</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="form-group ib-form-group-rewrite text-right">
{{--                            @if (Route::has('password.request'))--}}
{{--                            <a href="{{ route('password.request') }}" class="float-left mt-3">--}}
{{--                                Forgot Password?--}}
{{--                            </a>--}}
{{--                            @endif--}}
                            <button type="submit" class="btn btn-primary icon-right text-uppercase px-3" tabindex="4">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="{{ asset('back_end/img/unsplash/login-bg.jpg') }}">
                <div class="absolute-bottom-left index-2">
                    <div class="text-light p-5 pb-2">
                        <div class="mb-5 pb-3">
                            <h2 id="greetingAdmin" class="mb-2 display-4 font-weight-bold pt-2"></h2>
                            <h5 class="font-weight-normal text-muted-transparent">Bali, Indonesia</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="{{ asset('back_end/js/stisla.js') }}"></script>

<!-- JS Libraies -->

<!-- Template JS File -->
<script src="{{ asset('back_end/js/scripts.js') }}"></script>
<script src="{{ asset('back_end/js/custom.js') }}"></script>

<!-- Greeting message section for admin -->
<script>
    let serverTime = new Date();
    let hrs = serverTime.getHours();

    let greeting;

    if (hrs < 12)
    {
        greeting = 'Good Morning';
    }
    else if(hrs >= 12 && hrs <= 17)
    {
        greeting = 'Good Afternoon';
    }

    else if(hrs >= 17 && hrs <= 24)
    {
        greeting = 'Good Evening';
    }
    // console.log(greeting);

    document.getElementById('greetingAdmin').innerHTML = greeting+', ' +'Admin'
</script>
</body>
</html>
