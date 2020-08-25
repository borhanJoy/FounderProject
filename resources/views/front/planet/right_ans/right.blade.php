@extends('front.master')
@section('body')
    <div class="body">


        <div class="row">
            <div class="col-lg-0 text-center mt-4">
                <hr class="solid mt-0 mb-4">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-0 text-center mt-4">
                <hr class="solid mt-0 mb-4">
            </div>
        </div>

        <div class="container py-4">
            <div class="row">
                <div class="col">
                    <div class="blog-posts">
                        <article class="post post-large">
                            <div class="post-image">

                                <img src="{{asset($categories->photo)}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" style="width: 1920px;height: 200px;" />

                            </div>
                        </article>
                    </div>
                </div>
            </div>


            <h4 class="tp-caption font-weight-light ws-normal text-center"
                data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.03,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                data-x="center"
                data-y="center" data-voffset="['53','53','53','105']"
                data-width="['530','530','530','1100']"
                data-fontsize="['10','10','10','20']"
                data-lineheight="['19','19','19','25']"
                style="color: #000000;"><font color="green"><strong>Correct!</strong></font><br><br>{{$categories->suggestion}}<strong></strong> </h4>

                @if($categories->option_one == $categories->answer)
            <center><div class="btn">
                    <button class="btn btn-success rounded-0  font-weight-semibold btn-px-5 btn-py-2 border-width-1 text-1" disabled>{{$categories->option_one}}</button>
                    <button class="btn btn-light rounded-0  font-weight-semibold btn-px-5 btn-py-2 border-width-1 text-3" disabled>{{$categories->option_two}}</button>
                    <button  class="btn btn-light rounded-0  font-weight-semibold btn-px-5 btn-py-2 border-width-1 text-1" disabled>{{$categories->option_three}}</button>
                </div></center>
                    @elseif($categories->option_two == $categories->answer)
                <center><div class="btn">
                        <button class="btn btn-light rounded-0  font-weight-semibold btn-px-5 btn-py-2 border-width-1 text-1" disabled>{{$categories->option_one}}</button>
                        <button class="btn btn-success rounded-0  font-weight-semibold btn-px-5 btn-py-2 border-width-1 text-3" disabled>{{$categories->option_two}}</button>
                        <button  class="btn btn-light rounded-0  font-weight-semibold btn-px-5 btn-py-2 border-width-1 text-1" disabled>{{$categories->option_three}}</button>
                    </div></center>
            @elseif($categories->option_three == $categories->answer)
                <center><div class="btn">
                        <button class="btn btn-light rounded-0  font-weight-semibold btn-px-5 btn-py-2 border-width-1 text-1" disabled>{{$categories->option_one}}</button>
                        <button class="btn btn-light rounded-0  font-weight-semibold btn-px-5 btn-py-2 border-width-1 text-3" disabled>{{$categories->option_two}}</button>
                        <button  class="btn btn-success rounded-0  font-weight-semibold btn-px-5 btn-py-2 border-width-1 text-1" disabled>{{$categories->option_three}}</button>
                    </div></center>
            @endif

{{--            @foreach($categories as $category)--}}

            <center><a class="tp-caption btn btn-primary btn-outline btn-rounded font-weight-semibold"
                       data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                       data-hash
                       data-hash-offset="85"
                       href="{{route('quiz.start',['id'=>$categories->category_id])}}"
                       data-x="center" data-hoffset="['12','12','12','22']"
                       data-y="center" data-voffset="['133','133','133','255']"
                       data-whitespace="nowrap"
                       data-fontsize="['14','14','14','33']"
                       data-paddingtop="['15','15','15','40']"
                       data-paddingright="['45','45','45','110']"
                       data-paddingbottom="['15','15','15','40']"
                       data-paddingleft="['45','45','45','110']">Next <i class="fas fa-arrow-right ml-1"></i> </a></center>

{{--            @endforeach--}}
        </div>
    </div>
    @endsection
