@extends('front.master')
@section('body')


    <div role="main" class="main">

        <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 700, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'navigation' : {'arrows': { 'enable': true, 'style': 'arrows-style-1 arrows-big' }, 'bullets': {'enable': false, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
                <ul>
                    <li class="slide-overlay slide-overlay-level-6" data-transition="fade">
                        @foreach($homeslides as $homeslide)
                        <img src="{{asset($homeslide->photo)}}"
                             alt=""
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             class="rev-slidebg">

                        <h1 class="tp-caption tp-caption-overlay-opacity main-label"
                            data-frames='[{"delay":1300,"speed":1000,"sfxcolor":"#212529","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#212529","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                            data-x="left" data-hoffset="['0','30','30','30']"
                            data-y="center"
                            data-fontsize="['50','50','50','60']"
                            data-letterspacing="0"
                            data-paddingtop="['10','10','10','10']"
                            data-paddingbottom="['10','10','10','10']"
                            data-paddingleft="['18','18','18','18']"
                            data-paddingright="['18','18','18','18']">{{$homeslide->title}}</h1>

                        <div class="tp-caption font-weight-light text-color-light ws-normal"
                             data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-x="left" data-hoffset="['3','35','35','35']"
                             data-y="center" data-voffset="['65','65','65','95']"
                             data-width="['690','690','690','800']"
                             data-fontsize="['18','18','18','35']"
                             data-lineheight="['29','29','29','40']">{{$homeslide->slug}}.</div>
                        @endforeach


                        <a class="tp-caption btn btn-dark btn-primary font-weight-bold"
                           href="#"
                           data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                           data-x="left" data-hoffset="['0','30','30','30']"
                           data-y="center" data-voffset="['140','140','140','245']"
                           data-paddingtop="['15','15','15','30']"
                           data-paddingbottom="['15','15','15','30']"
                           data-paddingleft="['40','40','40','50']"
                           data-paddingright="['40','40','40','50']"
                           data-fontsize="['13','13','13','25']"
                           data-lineheight="['20','20','20','25']">WHAT WE DO</a>

                        <a class="tp-caption btn btn-primary font-weight-bold"
                           href="{{route('planet.design')}}"
                           data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                           data-x="left" data-hoffset="['185','185','220','340']"
                           data-y="center" data-voffset="['140','140','140','245']"
                           data-paddingtop="['16','16','16','31']"
                           data-paddingbottom="['16','16','16','31']"
                           data-paddingleft="['40','40','40','50']"
                           data-paddingright="['40','40','40','50']"
                           data-fontsize="['13','13','13','25']"
                           data-lineheight="['20','20','20','25']">GET INVOLVED<i class="fas fa-arrow-right ml-1"></i></a>

                    </li>

                </ul>
            </div>
        </div>

        <div class="container">
            @foreach($weares as $weare)
            <div class="row mt-4 mt-lg-5 mb-4 py-4">
                <div class="col-lg-4">
                    <h2 class="mb-0 text-color-dark"><strong class="font-weight-bold">{{$weare->title}}</strong></h2>
                    <p class="lead">{{$weare->short_description}}</p>
                </div>
                <div class="col-lg-2 text-center d-none d-lg-block">
                    <img src="{{asset('img/dotted-line-angle.png')}}" class="img-fluid" alt="" />
                </div>
                <div class="col-lg-6">
                    <p>{!! $weare->description !!}</p>
                    <a class="mt-3" href="demo-construction-company.html">Learn More <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
                @endforeach
        </div>

        </section>

        <section class="section bg-color-white-scale-1 section-height-3 border-0 m-0 appear-animation" data-appear-animation="fadeIn">

            <div class="row">
                <div class="col-lg-12 text-center mt-4">
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    @foreach($helptitles as $helptitle)
                    <h2 class="mb-0 text-color-dark"><strong class="font-weight-bold">{{$helptitle->title}}</strong></h2>
                    <p class="lead">{{$helptitle->description}}</p>
                        @endforeach
                </div>
            </div>

            <div class="container my-3">
                <div class="row justify-content-center">
                    <div class="col-sm-10 col-md-7 col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                        <div class="featured-boxes featured-boxes-modern-style-1">
                            <div class="featured-box overlay overlay-show">
                                <div class="featured-box-background" style="background-image: url({{url('upload/1-proj-generic-corporate-11-2.jpg')}}); background-size: cover; background-position: center;"></div>
                                <div class="box-content px-lg-4 px-xl-5 py-lg-5">
                                    <i class="fas fa-hands-helping" style="font-size:55px;color:blue;"></i>
                                    <h2>Submit Your Project</h2>
                                    <p class="font-weight-bold">Are you a non-profit or run a project for social good? We would love to support your idea.</p>
                                    <a href="{{route('submit.project')}}" class="btn btn-info btn-outline font-weight-semibold btn-px-5 btn-py-2 border-width-1 text-1">SUBMIT PROPOSAL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-7 col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                        @foreach($planets as $planet)
                        <div class="featured-boxes featured-boxes-modern-style-1">
                            <div class="featured-box overlay overlay-show">
                                <div class="featured-box-background" style="background-image: url({{$planet->photo}}); background-size: cover; background-position: center;"></div>
                                <div class="box-content px-lg-4 px-xl-5 py-lg-5">
                                    <i class="{{$planet->icon}}" style="font-size:55px;color:yellow;"></i>
                                    <h2>{{$planet->title}}</h2>
                                    <p class="font-weight-bold">{{$planet->subtitle}}</p>
                                    <a href="{{route('planet.design')}}" class="btn btn-warning btn-outline font-weight-semibold btn-px-5 btn-py-2 border-width-1 text-1">{{$planet->button_txt}}</a>
                                </div>
                            </div>
                        </div>
                            @endforeach
                    </div>
                    <div class="col-sm-10 col-md-7 col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                        <div class="featured-boxes featured-boxes-modern-style-1">
                            <div class="featured-box overlay overlay-show">
                                <div class="featured-box-background" style="background-image: url(img/generic/1-vol-generic-corporate-11-2.jpg); background-size: cover; background-position: center;"></div>
                                <div class="box-content px-lg-4 px-xl-5 py-lg-5">
                                    <i class="fas fa-people-carry" style="font-size:55px;color:white;"></i>
                                    <h2>Be a Volunteer</h2>
                                    <p class="font-weight-bold">See what upcoming events we have. Register as a Volunteer and help us do more good.</p>
                                    <a href="/" class="btn btn-light-2 btn-outline font-weight-semibold btn-px-5 btn-py-2 border-width-1 text-1">REGISTER NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        @foreach($impactimages as $impactimage)
        <section class="section section-parallax section-height-3 border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 7, 'parallaxHeight': '150%', 'offset': 100}" data-image-src="{{asset($impactimage->photo)}}">
            @endforeach
            <div class="row text-center">
                <div class="col">
                    @foreach($impacttitles as $impacttitle)
                    <h2 class="mb-0 text-color-dark">{{$impacttitle->title1}} <strong class="font-weight-bold">{{$impacttitle->title2}}</strong></h2>
                    @endforeach
                    <a class="mt-3" href="demo-construction-company.html">Learn More</a>
                </div>
            </div>
            <div class="container">
                <div class="row counters counters-sm py-4 mt-5">
                    @foreach($impactvalues as $impactvalue)
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <i class="{{$impactvalue->icon}}"  style="font-size:35px;color:{{$impactvalue->color}};"></i>
                            <strong class="text-color-dark font-weight-extra-bold" data-to="{{$impactvalue->value}}" data-append="+">0</strong>
                            <label class="text-4 mt-1">{{$impactvalue->title}}</label>
                        </div>
                    </div>
                        @endforeach



                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-lg-12 text-center mt-4">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center mt-4">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center mt-4">
            </div>
        </div>
        <section class="pt-3 section-custom-construction-1">
            <div class="row text-center">
                <div class="col">
                    @foreach($whatwetitles as $whatwetitle)
                    <h2 class="mb-0 text-color-dark"><strong class="font-weight-bold">{{$whatwetitle->title}}</strong></h2>
                    <p class="lead">{!! $whatwetitle->description !!}</p>
                        @endforeach
                </div>
            </div>
            <div class="image-gallery sort-destination full-width mb-0">
                @foreach($whatwedoimages as $whatwedoimage)
                <div class="isotope-item">

                    <div class="image-gallery-item mb-0">
                        <a href="portfolio-single-wide-slider.html">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
									<span class="thumb-info-wrapper">
										<img src="{{asset($whatwedoimage->photo)}}" class="img-fluid" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">{{$whatwedoimage->title}}</span>
											<span class="thumb-info-type">See Our Work</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
										</span>
									</span>
								</span>
                        </a>
                    </div>

                </div>
                @endforeach

            </div>

        </section>





        <div class="container">

            <div class="row">
                <div class="col-lg-0 text-center mt-4">
                    <hr class="solid mt-0 mb-4">
                </div>
            </div>

            <div class="row text-center">
                @foreach($blogtitles as $blogtitle)
                <div class="col">
                    <h2 class="mb-0 text-color-dark"><strong class="font-weight-bold">{{$blogtitle->title}}</strong></h2>
                    <p class="lead">{{$blogtitle->description}}</p>
                </div>
                    @endforeach
            </div>

            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-lg-4">
                    <div class="recent-posts mt-4">
                        <a href="{{route('blog.details',['id'=>$blog->id,'title'=>$blog->title])}}">
                            <img class="img-fluid pb-3" src="{{asset($blog->photo)}}" alt="Blog">
                        </a>
                        <article class="post">
                            <div class="post-date">
                                <span class="day">{{$blog->created_at->format('d')}}</span>
                                <span class="month">{{$blog->created_at->format('M')}}</span>
                            </div>
                            <h4 class="pt-2 pb-0 mb-0"><a class="text-color-dark" href="{{route('blog.details',['id'=>$blog->id,'title'=>$blog->title])}}">{{$blog->title}}</a></h4>
                            <p>By admin</p>
                            <p> {!! $blog->short_description !!}.</p>
                            <a class="mt-3" href="{{route('blog.details',['id'=>$blog->id,'title'=>$blog->title])}}">Read More <i class="fas fa-long-arrow-alt-right position-relative top-1"></i></a>
                        </article>
                    </div>
                </div>
                    @endforeach


            </div>

            <div class="row">
                <div class="col-lg-12 text-center mt-4">
                    <hr class="solid mt-0 mb-4">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-0 text-center mt-4">
                    <hr class="solid mt-0 mb-4">
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    @foreach($partnertitles as $partnertitle)
                    <p class="lead">{{$partnertitle->title}}</p>
                        @endforeach
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="owl-carousel owl-theme stage-margin rounded-nav" data-plugin-options="{'margin': 10, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40, 'items': 6, 'autoplay': true, 'autoplayTimeout': 3000}">
                       @foreach($partnerimages as $partnerimage)
                        <div>
                            <img class="img-fluid" src="{{asset($partnerimage->photo)}}" alt="">
                        </div>
                           @endforeach
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-0 text-center mt-4">
                    <hr class="solid mt-0 mb-4">
                </div>
            </div>

        </div>

    </div>


    @endsection
