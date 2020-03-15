@extends('front_end.layouts.master')

@section('title','Daily Holiday')

@section('content')
    <div class="container">
        @foreach($day->chunk(3) as $chunk)
            <div class="row my-5">
                @foreach($chunk as $d)
                    <div class="col-lg-4">
                        {{--                        <div class="main">--}}
                        {{--                            <div class="cards">--}}
                        {{--                                <img src="{{ asset($awe->package_img) }}" alt="">--}}
                        {{--                                <h2><a href="">{{ $awe->package_title }}</a></h2>--}}
                        {{--                                <p>{!! Str::limit($awe->package_sub_title,50) !!}</p>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <div class="card">
                            <img class="card-img-top" src="{{ asset($d->package_img) }}" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">{{ $d->package_title }}</h4>
                                <h4>{{ $d->package_price }}</h4>
                                <p class="card-text">{!! Str::limit($d->package_description,200) !!}</p>
                                <a href="#" class="btn btn-primary">See More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
