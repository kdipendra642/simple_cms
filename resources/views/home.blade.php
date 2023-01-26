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

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection