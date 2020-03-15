@extends('front_end.layouts.master')

@section('title','Ship Ticket')

@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="padding-top: 20px;padding-bottom: 20px">
            <div class="card comp-card">
                <div class="card-body">
                    <h3 style="text-align: center;">Ship Ticket</h3>
                    <form action="#" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name: <span
                                    style="color: red">*</span></label>
                            <input type="text" class="form-control" id="recipient-name" name="name" required
                                   value="{{old('name')}}" placeholder="Please enter your name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Mobile: <span style="color: red">*</span></label>
                            <input type="tel" name="" id="phone" class="form-control form-control-sm" value="{{old('mobile')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email: <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="recipient-name" name="email"
                                   value="{{old('email')}}" required=""
                                   placeholder="Please enter your valid email address">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">From: <span
                                    style="color: red">*</span></label>
                            <input type="text" class="form-control" id="recipient-name" name="from" required
                                   value="{{old('from')}}" placeholder="Enter your city">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">To: <span
                                    style="color: red">*</span></label>
                            <input type="text" class="form-control" id="recipient-name" name="to" required
                                   value="{{old('to')}}" placeholder="Enter your city">
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="recipient-name" class="col-form-label">Date of Journey <span
                                        style="color: red">*</span></label>
                                <input type="date" class="form-control" id="recipient-name" name="to" required
                                       value="{{old('to')}}" placeholder="Enter your city">
                            </div>

                            <div class="col">
                                <label for="recipient-name" class="col-form-label">Date of Journey <span
                                        style="color: red">*</span></label>
                                <input type="date" class="form-control" id="recipient-name" name="to" required
                                       value="{{old('to')}}" placeholder="Enter your city">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Guests <span style="color: red">*</span></label>
                            <input type="number" class="form-control" id="recipient-name" name="guest" value="{{old('guest')}}" required placeholder="How many guest?">
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-form-label">Address: <span
                                    style="color: red">*</span></label>
                            <textarea placeholder="Please enter your address" class="form-control" name="address"
                                      id="address" cols="30" rows="5" required>{!! old('address') !!}</textarea>
                        </div>
                        <br>
                        <div class="form-group" align="center">
                            <button type="submit" class="btn btn-mat btn-primary">SEND</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

@endsection
