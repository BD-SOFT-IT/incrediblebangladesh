@extends('back_end.layouts.master')

@section('title','All Blog Post')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                    <div class="card-header ib-card-header"><h4>All Blog Post</h4></div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover" id="packageScheduleTable">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogs as $index=>$blog)
                                <tr>
                                    <td>{{ $index+1}}</td>
                                    <td>{{ $blog->blog_title }}</td>
                                    <td>{{ $blog->blog_sub_title }}</td>
                                    <td>{!! Str::limit($blog->blog_description,120) !!}</td>

                                    <td style="width: 65px">
                                        <a href="{{ route('blog.edit',$blog->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('blog.delete',$blog->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure?')"><i class="fas fa-dumpster"></i></a>
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
