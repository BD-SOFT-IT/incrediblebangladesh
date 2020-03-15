@extends('back_end.layouts.master')

@section('title','Schedules')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
               <div class="card">
                   <div class="card-header ib-card-header"><h4>schedule for package</h4></div>
                   <div class="card-body">
                       <form action="{{ route('travel.schedule') }}" method="post" autocomplete="off">
                           <div class="form-row mb-3">
                               <div class="col">
                                   <small>Select package <sup class="text-danger">*</sup></small>
                                   <select name="package_id" id="" class="form-control">
                                       <option disable selected> Please Select a Category</option>
                                       @foreach($travel_packages as $package)
                                           <option value="{{ $package->id }}">{{ $package->package_title }}</option>

                                       @endforeach
                                   </select>
                               </div>
                           </div>
                           <div class="form-row mb-3">
                               <div class="col">
                                   <small>Select schedule for package <sup class="text-danger">*</sup></small>
                                   <input type="date" name="package_schedule" id="" class="form-control form-control-sm">
                               </div>
                               <div class="col">
                                   <small>Select schedule departure <sup class="text-danger">*</sup></small>
                                   <input type="time" name="package_schedule_time" id="" class="form-control form-control-sm">
                               </div>
                           </div>

                           <div class="form-row mb-3">
                               <div class="col">
                                   <small>Maximum Member <sup class="text-danger">*</sup></small>
                                   <input type="number" name="package_max_member" id="" class="form-control form-control-sm">
                               </div>
                           </div>
                           <div class="form-row mb-3">
                               <div class="col">
                                   <small>Extra Description <sup class="text-danger"></sup></small>
                                   <textarea name="package_ex_description" id="packageDescription"></textarea>
                               </div>
                           </div>
                           <div class="form-row mb-3">
                               <div class="col">
                                   <input type="submit" value="Submit" class="btn btn-success">
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
@endsection
