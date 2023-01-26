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
                                        <form method="POST" action="{{ route('backend.setting.update', $site_setting->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-12 mb-3">
                                                    <label for="exampleFormControlFile1">Site Name</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="" name="site_name" value="{{ $site_setting->site_name}}">
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="exampleFormControlFile1">Meta Title</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="" name="meta_title" value="{{ $site_setting->meta_title}}">
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="exampleFormControlFile1">Facebook Link</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="" name="social_profile_fb" value="{{ $site_setting->social_profile_fb}}">
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="exampleFormControlFile1">Twitter Link</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="" name="social_profile_twitter" value="{{ $site_setting->social_profile_twitter}}">
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="exampleFormControlFile1">InstaGram Link</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="" name="social_profile_insta" value="{{ $site_setting->social_profile_insta}}">
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="exampleFormControlFile1">Youtube Link</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="" name="social_profile_youtube" value="{{ $site_setting->social_profile_youtube}}">
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="exampleFormControlFile1">Linkedin</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="" name="social_profile_linkedin" value="{{ $site_setting->social_profile_linkedin}}">
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="exampleFormControlFile1">Contact Phone</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="" name="contact_phone" value="{{ $site_setting->contact_phone}}">
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="exampleFormControlFile1">Contact Email</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="" name="contact_email" value="{{ $site_setting->contact_email}}">
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="exampleFormControlFile1">Contact Address</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="" name="contact_address" value="{{ $site_setting->contact_address}}">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="exampleFormControlFile1">Logo</label>
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" accept="image/png, image/gif, image/jpeg" name="logo">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="exampleFormControlFile1">Logo</label>
                                                    <br>
                                                    <img src="{{ asset('uploads/logo/'.$site_setting->logo) }}" alt="" height="100" width="100">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="exampleFormControlFile1">Favicon</label>
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" accept="image/png, image/gif, image/jpeg" name="favicon">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="exampleFormControlFile1">Favicon</label>
                                                    <br>
                                                    <img src="{{ asset('uploads/favicon/'.$site_setting->favicon) }}" alt="" height="100" width="100">
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