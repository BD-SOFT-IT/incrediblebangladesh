@extends('back_end.layouts.master')

@section('title','All Categories')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                @if(Session::has('message'))
                    <h3 class="text-success">{{ Session::get('message') }}</h3>
                @endif
                <table class="table table-bordered table-striped table-hover" id="packageScheduleTable">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Category Title</th>
                        <th>Category Tags</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($package_categories as $index=>$category)
                        <tr>
                            <td>{{ $index+1}}</td>
                            <td>{{ $category->category_title }}</td>
                            <td >{{ $category->category_tag }}</td>

                            <td style="width: 120px">
                                <a href="{{ route('travel.category.edit',$category->id) }}"
                                   class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="{{ route('travel.category.delete',$category->id) }}" class="btn btn-danger"
                                   onclick="return confirm('Are You Sure?')"><i class="fas fa-dumpster"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
