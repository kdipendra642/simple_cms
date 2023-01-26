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
                            <br>
                            <br>
                            <table class="table table-bordered border-primary">
                                <caption>List of Messages</caption>
                                <thead>
                                    <tr>
                                        <th scope="col">SN</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">IP_Address</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_contact as $contact)
                                    <tr>
                                        <th scope="row">{{$contact->id}}</th>
                                        <td>{{$contact->name}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->ip_address}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('backend.contact.read', $contact->id) }}" class="btn btn-warning">View</a>
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