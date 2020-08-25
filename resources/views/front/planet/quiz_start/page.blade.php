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
{{--@foreach($quiz as $q)--}}
        <div class="container py-4">
            <div class="row">
                <div class="col">
                    <div class="blog-posts">
                        <article class="post post-large">
                            <div class="post-image">

                                <img src="{{asset($quiz->photo)}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" style="width: 1920px;height: 200px;" alt="" />

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
                style="color: #000000;">{{$quiz->question_name}}</h4>


            <center><div class="btn">
                    <form action="{{route('quiz')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- fields -->
                        <button type="submit"  class="btn btn-info btn-outline font-weight-semibold btn-px-5 btn-py-2 border-width-1 text-1" name="answer" value="{{$quiz->option_one}}">{{$quiz->option_one}}</button>
                        <button type="submit"  class="btn btn-info btn-outline font-weight-semibold btn-px-5 btn-py-2 border-width-1 text-1" name="answer" value="{{$quiz->option_two}}">{{$quiz->option_two}}</button>
                        <button type="submit"  class="btn btn-info btn-outline font-weight-semibold btn-px-5 btn-py-2 border-width-1 text-1" name="answer" value="{{$quiz->option_three}}">{{$quiz->option_three}}</button>
                        <input type="hidden" name="id" value="{{$quiz->id}}">
                        <input type="hidden" name="id2" value="{{$quiz->id}}">

                    </form>
{{--                    <input type="button"  class="btn btn-info btn-outline font-weight-semibold btn-px-5 btn-py-2 border-width-1 text-1" value="{{$quiz->option_one}}">--}}
{{--                    <a href="#" class="btn btn-info btn-outline font-weight-semibold btn-px-5 btn-py-2 border-width-1 text-1">{{$quiz->option_one}}</a>--}}
{{--                    <a href="#" class="btn btn-info btn-outline font-weight-semibold btn-px-5 btn-py-2 border-width-1 text-1">{{$quiz->option_two}}</a>--}}
{{--                    <a href="#" class="btn btn-info btn-outline font-weight-semibold btn-px-5 btn-py-2 border-width-1 text-1">{{$quiz->option_three}}</a>--}}
                </div></center>
        </div>

{{--    @endforeach--}}
{{--        {{ $quiz->links() }}--}}
    </div>
    @endsection
