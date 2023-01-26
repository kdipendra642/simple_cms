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
                            <a href="{{ route('backend.pages.index')}}" class="btn btn-success float-right"> <- Back</a>
                                    <br>
                                    <br>
                                    <div class="bd-example">
                                        <form method="POST" action="{{ route('backend.pages.update', $pages->id) }}">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-8 mb-3">
                                                    <label for="validationCustom01">Page title</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Page Title" required name="title" value="{{$pages->title}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="status" id="invalidCheck" {{$pages->status == 1 ? "checked" : ''}}>
                                                    <label class="form-check-label" for="invalidCheck">
                                                        Status
                                                    </label>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </form>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection