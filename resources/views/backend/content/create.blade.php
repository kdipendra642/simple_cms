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
                            <a href="{{ route('backend.content.index')}}" class="btn btn-success float-right"> <- Back</a>
                                    <br>
                                    <br>
                                    <div class="bd-example">
                                        <form method="POST" action="{{ route('backend.content.store')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="exampleFormControlSelect1">Select Page </label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="pages_id">
                                                        @foreach($all_pages as $pages)
                                                        <option value="{{ $pages->id }}">{{ $pages->title }} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom01">Content title</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Content Title" required name="title">
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="exampleFormControlTextarea1">Description</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required></textarea>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="exampleFormControlFile1">Select Cover Image</label>
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" accept="image/png, image/gif, image/jpeg" name="cover" required>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label for="exampleFormControlFile1">Youtube Video URL(Optional)</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="" name="foreign_references">
                                                </div>


                                            </div>
                                            <div class="form-group">
                                                <!-- <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="status" id="invalidCheck">
                                                    <label class="form-check-label" for="invalidCheck">
                                                        Status
                                                    </label>
                                                </div> -->
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