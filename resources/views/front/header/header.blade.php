<header id="header" class="header-narrow header-light" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 1, 'stickySetTop': '1'}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row mb-3">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            @foreach($logotwos as $logotwo)
                            <img class="logo-default" alt="Porto2" width="324" height="212" src="{{asset($logotwo->photo)}}">
                            @endforeach
                                @foreach($logoones as $logoone)
                            <a href="{{route('/')}}">

                                <img class="logo-small" alt="Porto1" width="131" height="60" src="{{asset($logoone->photo)}}">

                            </a>
                                @endforeach

                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-stripe order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link active" href="{{route('/')}}">
                                                Home
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="nav-link dropdown-toggle" href="demo-construction-services.html">
                                                About Us
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="demo-construction-services-detail.html">Who We Are</a></li>
                                                <li><a class="dropdown-item" href="demo-construction-services-detail.html">Our Team</a></li>
                                                <li><a class="dropdown-item" href="demo-construction-services-detail.html">About Epyllion</a></li>
                                                <li><a class="dropdown-item" href="demo-construction-contact.html">Contact Us</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="nav-link dropdown-toggle" href="demo-construction-services.html">
                                                What We Do
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="demo-construction-services-detail.html">Our Projects</a></li>
                                                <li><a class="dropdown-item" href="demo-construction-services-detail.html">Our Partners</a></li>
                                                <li><a class="dropdown-item" href="demo-construction-services-detail.html">Sustainability Reports</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="nav-link dropdown-toggle" href="demo-construction-services.html">
                                                Get Involved
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('submit.project')}}">Submit Your Project</a></li>
                                                <li><a class="dropdown-item" href="demo-construction-services-detail.html">Be a Volunteer</a></li>
                                                <li><a class="dropdown-item" href="{{route('planet.design')}}">Support a Cause</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="nav-link dropdown-toggle" href="demo-construction-services.html">
                                                Stories & Events
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="demo-construction-services-detail.html">News & Events</a></li>
                                                <li><a class="dropdown-item" href="{{route('blog.page')}}">Blog</a></li>
                                            </ul>
                                        </li>
                                        @if(Session::get('userId'))
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('userName')}}</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#" class="dropdown-item" onclick="event.preventDefault();document.getElementById('userLogoutForm').submit();">Logout</a></li>

                                                </ul>
                                                <form id="userLogoutForm" action="{{route('user.logout')}}" method="POST">
                                                    @csrf

                                                </form>

                                            </li>

                                            @else
                                            <li>
                                                <a class="nav-link" href="{{route('user.login')}}">Login</a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="{{route('sign.up')}}">SignUp</a>

                                            </li>

                                            @endif


                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="header-nav-features header-nav-features-no-border d-none d-sm-block order-1 order-lg-2">
                            <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean ml-0">
                                @foreach($socials as $social)
                                    <li class="social-icons-{{$social->title}}"><a href="{{$social->link}}" target="_blank" title="Facebook"><i class="{{$social->icon}}"></i></a></li>

                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
