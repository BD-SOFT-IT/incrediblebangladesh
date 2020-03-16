@extends('back_end.layouts.master')

@section('title','Create Category')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                    <div class="card-header ib-card-header"><h4 class="">Create Package Category</h4></div>
                    @if(Session::has('message'))
                        {{ Session::get('message') }}
                    @endif
                    <div class="card-body">
                        <form action="{{ route('travel.category') }}" method="post" autocomplete="off">
                            @csrf
                            <div class="form-row mb-3">
                                <div class="col">
                                    <label for="categoryName" class="ib-custom-label">Category Title <sup class="text-danger">*</sup></label>
                                    <input type="text" name="category_title" id="categoryName" class="form-control form-control-sm" placeholder="Awesome Holiday Package" onblur="setCategoryTag()">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <label for="categoryTag" class="ib-custom-label">Category Tags <sup class="text-danger">*</sup></label>
                                    <input type="text" name="category_tag" id="categoryTag" class="form-control form-control-sm" placeholder="Travel, Natural, Ocean" readonly>
                                    <small class="text-muted">Provide your package SEO friendly tags</small>
                                </div>
                            </div>
                            <script>
                                function setCategoryTag() {

                                    var getCategoryName = document.getElementById('categoryName').value;

                                    var slicedRequestCategoryName = getCategoryName.split(" ")[0];
                                    var finalRequestCategoryName = slicedRequestCategoryName.toLowerCase();

                                    document.getElementById('categoryTag').value =  finalRequestCategoryName;

                                }
                            </script>
                            <div class="form-row mt-4">
                                <div class="col">
                                    <input type="submit" class="btn btn-success-extended" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
