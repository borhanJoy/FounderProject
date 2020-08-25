@extends('front.master')
@section('body')
    <div role="main" class="main">

        <div class="slider-container rev_slider_wrapper" style="height: 800px;">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500], 'navigation' : {'arrows': { 'enable': false }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
                <ul>
                    <li data-transition="fade" class="slide-overlay slide-overlay-level-0">
                        <img src="{{asset('/')}}front/bg.jpg"
                             alt=""
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             class="rev-slidebg">



                        <div class="tp-caption text-color-black font-weight-normal"
                             data-x="center"
                             data-y="center" data-voffset="['-110','-110','-110','-135']"
                             data-start="700"
                             data-fontsize="['22','22','22','40']"
                             data-lineheight="['25','25','25','45']"
                             data-transform_in="y:[-50%];opacity:0;s:500;">MY PLAN. MY PLANET.</div>

                        <div class="tp-caption"
                             data-x="center" data-hoffset="['150','150','150','240']"
                             data-y="center" data-voffset="['-110','-110','-110','-135']"
                             data-start="1000"
                             data-transform_in="x:[300%];opacity:0;s:500;"
                             data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                        <h1 class="tp-caption font-weight-extra-bold text-color-black negative-ls-2"
                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center"
                            data-y="center" data-voffset="['-60','-60','-60','-85']"
                            data-fontsize="['30','30','30','60']"
                            data-lineheight="['55','55','55','95']">Small Steps create a Huge Impact.</h1>

                        <div class="tp-caption font-weight-normal text-color-black text-center"
                             data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-x="center"
                             data-y="center" data-voffset="['0','0','0','-25']"
                             data-fontsize="['15','15','15','25']"
                             data-lineheight="['19','19','19','20']"
                             style="color: #000000;">Learn how you can help people and your planet thrive.</div>

                        <a class="tp-caption btn btn-primary btn-outline btn-rounded font-weight-semibold"
                           data-frames='[{"delay":4500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                           data-hash
                           data-hash-offset="85"
                           href="{{route('planet.quiz.page')}}"
                           data-x="center" data-hoffset="0"
                           data-y="center" data-voffset="['100','100','100','75']"
                           data-whitespace="nowrap"
                           data-fontsize="['15','15','15','33']"
                           data-paddingtop="['15','15','15','40']"
                           data-paddingright="['45','45','45','110']"
                           data-paddingbottom="['15','15','15','40']"
                           data-paddingleft="['45','45','45','110']">GET STARTED NOW!</a>

                    </li>

                </ul>
            </div>
        </div>
    </div>
    @endsection
