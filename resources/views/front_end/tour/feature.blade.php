@extends('front_end.layouts.master')

@section('title','Feature Holiday')

@section('content')
    <div class="container">
        @foreach($feature->chunk(3) as $chunk)
            <div class="row my-5">
                @foreach($chunk as $f)
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset($f->package_img) }}" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">{{ $f->package_title }}</h4>
                                <p class="card-text">{{ Str::limit($f->package_sub_title,100) }}</p>
                                <h4 class="ib-package-cost"><b class="mr-2 mb-2">৳</b>{{ number_format($f->package_price) }}</h4>
                                <h6><a href="{{ route('single.package',$f->id) }}">Read More</a></h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
