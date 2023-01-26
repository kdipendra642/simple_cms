@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3">
                            @include('backend.common.sidebar')
                        </div>
                        <div class="col-lg-9">
                            <a href="{{ route('backend.content.create')}}" class="btn btn-success float-right"> + Add Contents</a>
                            <br>
                            <br>
                            <table class="table table-bordered border-primary">
                                <caption>List of Contents</caption>
                                <thead>
                                    <tr>
                                        <th scope="col">SN</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Page</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_content as $content)
                                    <tr>
                                        <th scope="row">{{$content->id}}</th>
                                        <td> <img src="{{ asset('uploads/content/'.$content->cover) }}" alt="" height="100" width="100"></td>
                                        <td>{{$content->title}}</td>
                                        <td>{{$content->pages->title}}</td>
                                        <td>{{ str_limit($content->description, 20) }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('backend.content.edit', $content->id) }}" class="btn btn-warning">Edit</a>
                                                <a href="{{ route('backend.content.delete', $content->id) }}" class="btn btn-danger">Delete</a>
                                            </div>
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
    </div>
</div>


@endsection