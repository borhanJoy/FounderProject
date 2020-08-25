<footer id="footer">
    <div class="container">
        <div class="row py-5 my-4">
            <div class="col-md-9 mb-4 mb-lg-0">
                <div class="row pt-3">
                    <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                        <h5 class="text-3 mb-3"><font color="black">NAVIGATION</font></h5>
                        <ul class="list list-icons list-icons-sm mb-0">
                            <li><a class="link-hover-style-1" href="blog-full-width.html">Home</a></li>
                            <li><a class="link-hover-style-1" href="blog-large-image.html">About Epyllion</a></li>
                            <li><a class="link-hover-style-1" href="blog-medium-image.html">Our Projects</a></li>
                            <li><a class="link-hover-style-1" href="blog-post.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                        <h5 class="text-3 mb-3"><font color="black">WHAT WE DO</font></h5>
                        <ul class="list list-icons list-icons-sm mb-0">
                            <li><a class="link-hover-style-1" href="page-full-width.html">Our Projects</a></li>
                            <li><a class="link-hover-style-1" href="page-left-sidebar.html">Our Partners</a></li>
                            <li><a class="link-hover-style-1" href="page-right-sidebar.html">Our Sustainability Reports</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                        <h5 class="text-3 mb-3"><font color="black">GET INVOLVED</font></h5>
                        <ul class="list list-icons list-icons-sm mb-0">
                            <li><a class="link-hover-style-1" href="2forms-basic-epy.html">Submit Proposal</a></li>
                            <li><a class="link-hover-style-1" href="portfolio-3-columns.html">Register as a Volunteer</a></li>
                            <li><a class="link-hover-style-1" href="3mpmp-epy1.html">Support a Cause</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                        <h5 class="text-3 mb-3"><font color="black">STORIES & EVENTS</font></h5>
                        <ul class="list list-icons list-icons-sm mb-0">
                            <li><a class="link-hover-style-1" href="page-team.html">News and Events</a></li>
                            <li><a class="link-hover-style-1" href="page-services.html">Epyllion Foundation Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-lg-0">
                @foreach($contacts as $contact)
                <h5 class="text-3 mb-3 pb-1"><font color="black">{{$contact->title}}</font></h5>
                <p class="mb-2"><i class="fas fa-phone"></i> <a href="tel:{{$contact->phone}}">{{$contact->phone}}</a></p>
                <p class="mb-2"><i class="far fa-envelope"></i> <a href="mailto:{{$contact->email}}">{{$contact->email}}</a></p>
                <p class="mb-2"><i class="fas fa-map-marked-alt" style="font-size:13px"></i> {{$contact->address}}</p>
                @endforeach
                <ul class="footer-social-icons social-icons mt-4">
                    @foreach($socials as $social)
                    <li class="social-icons-{{$social->title}}"><a href="{{$social->link}}" target="_blank" title="Facebook"><i class="{{$social->icon}}"></i></a></li>

                        @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                    <p>� Copyright 2019. All Rights Reserved.</p>
                </div>
                <div class="col-lg-3 d-flex align-items-center justify-content-center justify-content-lg-end">
                    <nav id="sub-menu">
                        <ul>
                            <li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="ml-1 text-decoration-none"> Privacy Policy</a></li>
                            <li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="ml-1 text-decoration-none"> Terms and Conditions</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
