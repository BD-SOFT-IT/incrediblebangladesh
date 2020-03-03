@extends('back_end.layouts.master')

@section('title','Package Schedule')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-11 mx-auto">
                <div class="card">
                    <div class="card-header ib-card-header"><h4>All Schedule List</h4></div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover" id="packageScheduleTable">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>title</th>
                                <th>Data</th>
                                <th>Departure</th>
                                <th>Members</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($schedules as $index=>$schedule)
                                <tr>
                                    <td>{{ $index+1}}</td>
                                    <td>{{ $schedule->package->package_title }}</td>
                                    <td>{{ date('d-m-Y', strtotime($schedule->package_schedule)) }}</td>
                                    <td>{{ date('h-i-s', strtotime($schedule->package_schedule_time)) }}</td>
                                    <td>{{ $schedule->package_max_member }}</td>
                                    <td>
                                        {!! Str::limit($schedule->package_ex_description,120) !!}
                                    </td>

                                    <td style="width: 65px">

                                        <a href="{{ route('travel.edit',$schedule->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('travel.delete',$schedule->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure?')"><i class="fas fa-dumpster"></i></a>
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
