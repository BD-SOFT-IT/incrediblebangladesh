@extends('front_end.layouts.master')

@section('title','Daily Holiday')

@section('content')
    <div class="container">
        @foreach($feature->chunk(3) as $chunk)
            <div class="row my-5">
                @foreach($chunk as $f)
                    <div class="col-lg-4">
                        {{--                        <div class="main">--}}
                        {{--                            <div class="cards">--}}
                        {{--                                <img src="{{ asset($awe->package_img) }}" alt="">--}}
                        {{--                                <h2><a href="">{{ $awe->package_title }}</a></h2>--}}
                        {{--                                <p>{!! Str::limit($awe->package_sub_title,50) !!}</p>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <div class="card">
                            <img class="card-img-top" src="{{ asset($f->package_img) }}" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">{{ $f->package_title }}</h4>
                                <h4>{{ $f->package_price }}</h4>
                                <p class="card-text">{!! Str::limit($f->package_description,200) !!}</p>
                                <a href="#" class="btn btn-primary">See More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
