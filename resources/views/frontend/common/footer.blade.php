<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-info">
                    <h3>{{$site_settings->site_name}}</h3>
                    <p>
                        A108 Adam Street <br>
                        NY 535022, USA<br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                    <div class="social-links mt-3">
                        <a href="{{$site_settings->social_profile_twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="{{$site_settings->social_profile_fb}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="{{$site_settings->social_profile_insta}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="{{$site_settings->social_profile_youtube}}" class="youtube"><i class="bx bxl-youtube"></i></a>
                        <a href="{{$site_settings->social_profile_linkedin}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        @foreach($pages as $page)
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{$page->title}}</a></li>
                        @endforeach
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>

                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Please subscribe to our newsletter</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>{{$site_settings->site_name}}</span></strong>. All Rights Reserved
        </div>
    </div>
</footer>