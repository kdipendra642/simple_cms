<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope-fill"></i><a href="#">{{$site_settings->contact_email}}</a>
            <i class="bi bi-phone-fill phone-icon"></i> {{$site_settings->contact_phone}}
        </div>
        <div class="social-links d-none d-md-block">
            <a href="{{$site_settings->social_profile_twitter}}" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="{{$site_settings->social_profile_fb}}" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="{{$site_settings->social_profile_insta}}" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="{{$site_settings->social_profile_linkedin}}" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>
    </div>
</section>
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <div class="logo me-auto">
            <h1><a href="{{ url('/')}}">{{$site_settings->site_name}}</a></h1>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                @foreach($pages as $page)
                <li><a class="nav-link scrollto active" href="{{ route('frontend.page.detail', $page->slug) }}">{{$page->title}}</a></li>
                @endforeach
                <li><a class="nav-link scrollto" href="{{ url('/contact')}}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>