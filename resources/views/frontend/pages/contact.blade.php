@extends('frontend.pages')
@section('frontend')
@php
$site_settings = App\Model\SiteSetting::where('id', 1)->first();
$pages = App\Model\Pages::where('status', 1)->orderBy('id', 'DESC')->get();
$first_page = App\Model\Content::where('id', 3)->first();
@endphp


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
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                <form action="{{ route('frontend.message.store') }}" method="post" role="form" class="php-email-form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>
        </div>
    </div>
</section><!-- End Contact Us Section -->
@endsection