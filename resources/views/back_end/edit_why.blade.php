@extends('back_end.layouts.master')

@section('title','Edit Why')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-header ib-card-header"> <h4>Edit Why Incredible</h4></div>
                    <div class="card-body">
                        <form action="{{ route('why.update') }}" method="post" >
                            @csrf
                            <div class="form-row mb-3">
                                @if(session()->has('message'))
                                    <p>{{ Session::get('message') }}</p>
                                @endif
                                <small>Title</small>
                                <input type="text" name="why_title" class="form-control form-control-sm" value="{{ $edit_why->why_title }}">
                                <input type="hidden" name="id" value="{{ $edit_why->id }}">
                            </div>
                            <div class="form-row mb-3">
                                <small>Description</small>
                                <textarea name="why_des" id="" rows="20" class="form-control form-control-sm">{{ $edit_why->why_des }}</textarea>
                            </div>
                            <div class="form-row mb-3">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
