@extends('back_end.layouts.master')

@section('title','Update Category')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                    <div class="card-header ib-card-header"><h4 class="">Create Package Category</h4></div>
                    <div class="card-body">
                        <form action="{{ route('travel.category.update') }}" method="post" autocomplete="off">
                            @csrf
                            <div class="form-row mb-3">
                                <div class="col">
                                    <label for="categoryName" class="ib-custom-label">Category Title <sup class="text-danger">*</sup></label>
                                    <input type="text" name="category_title" id="categoryName" class="form-control form-control-sm" value="{{ $category_update->category_title }}">
                                    <input type="hidden" name="id" value="{{ $category_update->id }}">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <label for="categoryTag" class="ib-custom-label">Category Tags <sup class="text-danger">*</sup></label>
                                    <input type="text" name="category_tag" id="categoryTag" class="form-control form-control-sm" value="{{ $category_update->category_tag }}">
                                    <small class="text-muted">Provide your package SEO friendly tags</small>
                                </div>
                            </div>
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
