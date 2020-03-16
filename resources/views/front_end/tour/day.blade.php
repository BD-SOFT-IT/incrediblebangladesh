@extends('front_end.layouts.master')

@section('title','Daily Holiday')

@section('content')
    <div class="container">
        @foreach($day->chunk(3) as $chunk)
            <div class="row my-5">
                @foreach($chunk as $d)
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset($d->package_img) }}" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">{{ $d->package_title }}</h4>
                                <h4 class="ib-package-cost"><b class="mr-2">৳</b>{{ number_format($d->package_price) }}</h4>
                                <p class="card-text">{!! Str::limit($d->package_description,200) !!}</p>
                                <h6><a href="{{ route('single.package',$d->id) }}">Read More</a></h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
