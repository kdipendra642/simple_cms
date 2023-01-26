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
                            <a href="{{ route('backend.contact.index')}}" class="btn btn-success float-right"> <- Back</a>
                                    <br>
                                    <br>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Field</th>
                                                <th scope="col">Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Name</td>
                                                <td>{{$detail_preview->name}}</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>{{$detail_preview->email}}</td>
                                            </tr>
                                            <tr>
                                                <td>Subject</td>
                                                <td>{{$detail_preview->subject}}</td>
                                            </tr>
                                            <tr>
                                                <td>Message</td>
                                                <td>{{$detail_preview->message}}</td>
                                            </tr>
                                            <tr>
                                                <td>Message</td>
                                                <td>{{$detail_preview->ip_address}}</td>
                                            </tr>
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