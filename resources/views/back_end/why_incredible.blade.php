@extends('back_end.layouts.master')

@section('title','Why Incredible Bangladesh')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header ib-card-header">
                        <h4 class="">Why Incredible Bangladesh</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row mb-3">
                                @if(session()->has('message'))
                                    <p>{{ Session::get('message') }}</p>
                                @endif
                                <small>Title</small>
                                <input type="text" name="why_title" class="form-control form-control-sm" >
                            </div>
                            <div class="form-row mb-3">
                                <small>Description</small>
                                <textarea name="why_des" id="" rows="20" class="form-control form-control-sm"></textarea>
                            </div>
                            <div class="form-row mb-3">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header ib-card-header"> <h4>All Why</h4></div>
                    <div class="card-body">
                        <table class="table table-bordered" id="packageCategoryTable">
                            <thead>
                            <tr>
                                <th>SL NO.</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($why_incredible as $index=>$why)
                                <tr>
                                    <td>{{ $index+1}}</td>
                                    <td>{{ $why->why_title }}</td>
                                    <td>{{ $why->why_des }}</td>
                                    <td>
                                        <a href="{{ route('why.edit',$why->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('why.delete',$why->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure?')"><i class="fas fa-dumpster"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
