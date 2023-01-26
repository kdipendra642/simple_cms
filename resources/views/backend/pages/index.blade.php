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
                            <a href="{{ route('backend.pages.create')}}" class="btn btn-success float-right"> + Add Pages</a>
                            <br>
                            <br>
                            <table class="table table-bordered border-primary">
                                <caption>List of Pages</caption>
                                <thead>
                                    <tr>
                                        <th scope="col">SN</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">CreatedAt</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_pages as $pages)
                                    <tr>
                                        <th scope="row">{{$pages->id}}</th>
                                        <td>{{$pages->title}}</td>
                                        <td>
                                            @if($pages->status == 1)
                                            <span class="badge badge-primary">Active</span>
                                            @else
                                            <span class="badge badge-danger">OFF</span>
                                            @endif
                                        </td>
                                        <td>{{$pages->created_at}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('backend.pages.edit', $pages->id) }}" type="button" class="btn btn-warning">Edit</a>
                                                <a href="{{ route('backend.pages.delete', $pages->id) }}" type="button" class="btn btn-danger">Delete</a>
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