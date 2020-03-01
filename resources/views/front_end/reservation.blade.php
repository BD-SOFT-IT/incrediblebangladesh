@extends('front_end.layouts.master')

@section('title','Reserve Holiday')

@section('content')
    <section class="section_gap_75">
        <form action="" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <div class="card">
                            <div class="card-header ib-card-header"><h4>Book Your Seat</h4></div>
                            <div class="card-body">
                                <div class="form-row mb-2">
                                    <div class="col">
                                        <small>First Name <sup class="text-danger">*</sup></small>
                                        <input type="text" name="" id="" class="form-control form-control-sm" placeholder="Enter your first name">
                                    </div>
                                    <div class="col">
                                        <small>Last Name <sup class="text-danger">*</sup></small>
                                        <input type="text" name="" id="" class="form-control form-control-sm" placeholder="Enter your last name">
                                    </div>
                                </div>
                                <div class="form-row mb-2">
                                    <div class="col">
                                        <small>E-mail <sup class="text-danger">*</sup></small>
                                        <input type="email" name="" id="" class="form-control form-control-sm" placeholder="Enter your email">
                                    </div>
                                </div>
                                <div class="form-row mb-2">
                                    <div class="col">
                                        <small>Phone Number <sup class="text-danger">*</sup></small>
                                        <input type="tel" name="" id="phone" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="form-row mb-2">
                                    <div class="col">
                                        <small>Package <sup class="text-danger">*</sup></small>
                                        <select name="" id="" class="form-control form-control-sm">
                                            <option value="">Select package</option>
                                            <option value="">Select 1</option>
                                            <option value="">Select 2</option>
                                            <option value="">Select 3</option>
                                            <option value="">Select 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row mb-2">
                                    <div class="col">
                                        <small>Phone Number <sup class="text-danger">*</sup></small>
                                        <select name="" id="" class="form-control form-control-sm">
                                            <option value="">Select your gender</option>
                                            <option value="">Male</option>
                                            <option value="">Female</option>
                                            <option value="">Other</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <small>Nationality <sup class="text-danger">*</sup></small>
                                        <input type="text" name="" id="" placeholder="Nationality" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="form-row mb-2">
                                    <div class="col">
                                        <small>Preferred Room Type <sup class="text-danger">*</sup></small>
                                        <select name="" id="" class="form-control form-control-sm">
                                            <option value="">Select room type</option>
                                            <option value="">Single Room</option>
                                            <option value="">Couple Room</option>
                                            <option value="">Twin Room</option>
                                            <option value="">Shared Room</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <small>Nationality <sup class="text-danger">*</sup></small>
                                        <input type="date" name="" id=""  class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="form-row mb-2">
                                    <div class="col">
                                        <small>Your Message(If any)</small>
                                        <textarea name="" id="" class="form-control form-control-sm" rows="5"></textarea>
                                        <small class="text-muted">Gives us any expectations, special needs, and others.</small>
                                    </div>
                                </div>
                                <div class="for-row mt-4">
                                    <div class="col">
                                        <input type="submit" value="Book Holiday" class="btn btn-success">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-header ib-card-header"><h4>Upcoming tours</h4></div>
                            <div class="card-body">
                                <ul>
                                    <li>this is testing date</li>
                                    <li>this is testing date</li>
                                    <li>this is testing date</li>
                                    <li>this is testing date</li>
                                    <li>this is testing date</li>
                                    <li>this is testing date</li>
                                    <li>this is testing date</li>
                                    <li>this is testing date</li>
                                    <li>this is testing date</li>
                                    <li>this is testing date</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
