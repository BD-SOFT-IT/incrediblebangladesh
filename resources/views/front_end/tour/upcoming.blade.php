@extends('front_end.layouts.master')

@section('title','Upcoming Holiday')

@section('content')
    <div class="container">
        @foreach($upcoming->chunk(3) as $chunk)
            <div class="row my-5">
                @foreach($chunk as $up)
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset($up->package_img) }}" alt="Card image" >
                            <div class="card-body">
                                <h3>{{ $up->package_title }}</h3>
                                <p>{{ Str::limit($up->package_sub_title,100) }}</p>
                                <h4 class="ib-package-cost"><b class="mr-2 mb-2">৳</b>{{ number_format($up->package_price) }}</h4>
                                <h6><a href="{{ route('single.package',$up->id) }}">Read More</a></h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
