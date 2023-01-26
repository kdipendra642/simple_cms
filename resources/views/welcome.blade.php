@extends('frontend.pages')
@section('frontend')
@php
$site_settings = App\Model\SiteSetting::where('id', 1)->first();
$pages = App\Model\Pages::where('status', 1)->orderBy('id', 'DESC')->get();
$first_page = App\Model\Content::where('id', 3)->first();
@endphp
<!-- ======= Our Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
            <h2>{{$first_page->title}} </h2>
            <p>{{$first_page->description}}</p>
        </div>
        <div class="row portfolio-container">

            <div class="col-lg-12 col-md-12 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{ asset('uploads/content/'.$first_page->cover) }}" class="img-fluid w-100" alt="">
                    <div class="portfolio-info">
                        <div class="portfolio-links">
                            <a href="{{ asset('uploads/content/'.$first_page->cover) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$first_page->title}}"><i class="bi bi-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Our Portfolio Section -->

<!-- ======= Contact Us Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Contact Us</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 d-flex" data-aos="fade-up">
                <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>Our Address</h3>
                    <p>{{$site_settings->contact_address}}</p>
                </div>
            </div>
            <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="info-box">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p>{{$site_settings->contact_email}}</p>
                </div>
            </div>
            <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="info-box ">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p>{{$site_settings->contact_phone}}</p>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Contact Us Section -->
@endsection