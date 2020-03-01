@extends('back_end.layouts.master')

@section('title','All Categories')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if(Session::has('message'))
                    <h3 class="text-success">{{ Session::get('message') }}</h3>
                @endif
                <table class="table table-bordered" id="packageCategoryTable">
                    <thead>
                        <tr>
                            <th>SL NO.</th>
                            <th>Category Title</th>
                            <th>Category Tags</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($package_categories as $index=>$category)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $category->category_title }}</td>
                            <td>{{ $category->category_tag }}</td>
                            <td>
                                <a href="{{ route('travel.category.edit',$category->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('travel.category.delete',$category->id) }}" class="btn btn-danger" onclick="return confirm('Are You Sure?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
