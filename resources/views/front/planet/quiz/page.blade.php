@extends('front.master')
@section('body')
    <div role="main" class="main mt-5" id="home">
        <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1140, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500]}">
                <ul>
                    <li class="slide" data-transition="fade">
                        <img src="{{asset('/')}}front/bg1.jpg"
                             alt=""
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             class="rev-slidebg">

                        <div class="tp-caption tp-resizeme"
                             data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:-100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-type="image"
                             data-x="left" data-hoffset="['0','-150','-200','-200']"
                             data-y="top" data-voffset="['-100','-150','-200','-200']"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-basealign="slide"><img src="{{asset('/')}}upload/1slide-one-page-1-2.jpg" alt=""></div>

                        <div class="tp-caption tp-resizeme"
                             data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-type="image"
                             data-x="right" data-hoffset="['0','-150','-200','-200']"
                             data-y="top" data-voffset="['-100','-150','-200','-200']"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-basealign="slide"><img src="{{asset('/')}}upload/1slide-one-page-1-3.jpg" alt=""></div>

                        <div class="tp-caption tp-resizeme"
                             data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:-100%;y:100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-type="image"
                             data-x="left" data-hoffset="['0','-150','-200','-200']"
                             data-y="bottom" data-voffset="['-100','-150','-200','-200']"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-basealign="slide"><img src="{{asset('/')}}upload/1slide-one-page-1-4.jpg" alt=""></div>

                        <div class="tp-caption tp-resizeme"
                             data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:100%;y:100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-type="image"
                             data-x="right" data-hoffset="['0','-150','-200','-200']"
                             data-y="bottom" data-voffset="['-100','-150','-200','-200']"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-basealign="slide"><img src="{{asset('/')}}upload/1slide-one-page-1-5.jpg" alt=""></div>


                        <h1 class="tp-caption font-weight-extra-bold text-color-black negative-ls-1"
                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center"
                            data-y="center" data-voffset="['-30','-30','-30','-30']"
                            data-fontsize="['50','50','50','90']"
                            data-lineheight="['55','55','55','95']">My Plan,<br>My Planet</h1>


                        <div class="tp-caption font-weight-light ws-normal text-center mt-5"
                             data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.03,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-x="center"
                             data-y="center" data-voffset="['53','53','53','105']"
                             data-width="['530','530','530','1100']"
                             data-fontsize="['20','20','20','40']"
                             data-lineheight="['19','19','19','25']"
                             style="color: #000000;margin-top: 100px;">Learn about social issues in your community, and what you can do about it.<br>
                            @foreach($categories as $category)
                                <a href="{{route('quiz.start',['id'=> $category->id])}}" class="btn btn-primary btn-lg">

                                   {{$category->category}}<br>


                                </a>
                            @endforeach


                        </div>

{{--                        <a class="tp-caption btn btn-dark btn-outline btn-rounded font-weight-semibold"--}}
{{--                           data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'--}}
{{--                           data-hash--}}
{{--                           data-hash-offset="85"--}}
{{--                           href="3mpmp-epy3.html"--}}
{{--                           data-x="center" data-hoffset="0"--}}
{{--                           data-y="center" data-voffset="['133','133','133','255']"--}}
{{--                           data-whitespace="nowrap"--}}
{{--                           data-fontsize="['14','14','14','33']"--}}
{{--                           data-paddingtop="['15','15','15','40']"--}}
{{--                           data-paddingright="['45','45','45','110']"--}}
{{--                           data-paddingbottom="['15','15','15','40']"--}}
{{--                           data-paddingleft="['45','45','45','110']">{{$category->category}}</a>--}}



{{--                        <a class="tp-caption btn btn-primary btn-outline btn-rounded font-weight-semibold"--}}
{{--                           data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'--}}
{{--                           data-hash--}}
{{--                           data-hash-offset="85"--}}
{{--                           href="3mpmp-epy3.html"--}}
{{--                           data-x="center" data-hoffset="0"--}}
{{--                           data-y="center" data-voffset="['205','205','205','255']"--}}
{{--                           data-whitespace="nowrap"--}}
{{--                           data-fontsize="['14','14','14','33']"--}}
{{--                           data-paddingtop="['15','15','15','40']"--}}
{{--                           data-paddingright="['45','45','45','110']"--}}
{{--                           data-paddingbottom="['15','15','15','40']"--}}
{{--                           data-paddingleft="['45','45','45','110']">EDUCATION</a>--}}

{{--                        <a class="tp-caption btn btn-success btn-outline btn-rounded font-weight-semibold"--}}
{{--                           data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'--}}
{{--                           data-hash--}}
{{--                           data-hash-offset="85"--}}
{{--                           href="3mpmp-epy3.html"--}}
{{--                           data-x="center" data-hoffset="0"--}}
{{--                           data-y="center" data-voffset="['275','275','275','305']"--}}
{{--                           data-whitespace="nowrap"--}}
{{--                           data-fontsize="['14','14','14','33']"--}}
{{--                           data-paddingtop="['15','15','15','40']"--}}
{{--                           data-paddingright="['45','45','45','110']"--}}
{{--                           data-paddingbottom="['15','15','15','40']"--}}
{{--                           data-paddingleft="['45','45','45','110']">ENVIRONMENT</a>--}}

{{--                        <a class="tp-caption btn btn-danger btn-outline btn-rounded font-weight-semibold"--}}
{{--                           data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'--}}
{{--                           data-hash--}}
{{--                           data-hash-offset="85"--}}
{{--                           href="3mpmp-epy3.html"--}}
{{--                           data-x="center" data-hoffset="0"--}}
{{--                           data-y="center" data-voffset="['345','345','345','375']"--}}
{{--                           data-whitespace="nowrap"--}}
{{--                           data-fontsize="['14','14','14','33']"--}}
{{--                           data-paddingtop="['15','15','15','40']"--}}
{{--                           data-paddingright="['45','45','45','110']"--}}
{{--                           data-paddingbottom="['15','15','15','40']"--}}
{{--                           data-paddingleft="['45','45','45','110']">HEALTHCARE</a>--}}




                    </li>

                </ul>
            </div>
        </div>
    </div>
    @endsection
