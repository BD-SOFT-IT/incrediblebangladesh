@extends('back_end.layouts.master')

@section('title','All Packages')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <table class="table table-bordered table-striped table-hover" id="packageScheduleTable">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Sub Title</th>
                        <th>Departure</th>
                        <th>Members</th>
                        <th>Expense</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($packages as $index=>$package)
                        <tr>
                            <td>{{ $index+1}}</td>
                            <td>{{ $package->package->package_title }}</td>
{{--                            <td>{{ date('h-i-s', strtotime($schedule->package_schedule_time)) }}</td>--}}
                            <td>{{ $package->package->package_sub_title }}</td>

                            <td>{{ date('d-m-Y', strtotime($package->package->package_schedule)) }}</td>
                            <td>{{ $package->package->package_max_member }}</td>
                            <td>{{ $package->package->package_price }}</td>
                            <td>{!! Str::limit($package->package->package_description,120) !!}</td>

                            <td style="width: 65px">

                                <a href="{{ route('travel.edit',$package->package->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="{{ route('travel.delete',$package->package->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure?')"><i class="fas fa-dumpster"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
