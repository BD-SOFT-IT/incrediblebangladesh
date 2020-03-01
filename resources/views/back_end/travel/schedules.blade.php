@extends('back_end.layouts.master')

@section('title','Package Schedule')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <table class="table table-bordered" id="packageCategoryTable">
                            <thead>
                            <tr>
                                <th>SL NO.</th>
                                <th>Data</th>
                                <th>Departure</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($schedules as $index=>$schedule)
                                <tr>
                                    <td>{{ $index+1}}</td>
                                    <td>{{ date('d-m-Y', strtotime($schedule->package_schedule)) }}</td>
                                    <td>{{ date('h-i-s', strtotime($schedule->package_schedule_time)) }}</td>
                                    <td></td>
                                    <td>
{{--                                        <a href="{{ route('why.edit',$why->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>--}}
{{--                                        <a href="{{ route('why.delete',$why->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure?')"><i class="fas fa-dumpster"></i></a>--}}
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
