@extends('front.master')
@section('body')

    <div role="main" class="main">
        <section class="section section-tertiary section-no-border pb-3 mt-0">
            <div class="container">
                <div class="row justify-content-end mt-4">
                    <div class="col-lg-10 pt-4 mt-4 text-right">
                        <h1 class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary">Blog</h1>
                    </div>
                </div>
            </div>
        </section>
    <div class="container">

        <div class="row pt-2 mt-5">
            <div class="col-md-12">
                <div class="blog-posts single-post mt-5">

                    <article class="post post-large blog-single-post">

                        <div class="post-date">
                            <span class="day">{{$blogs->created_at->format('d')}}</span>
                            <span class="month">{{$blogs->created_at->format('M')}}</span>
                        </div>

                        <div class="post-content">

                            <h1 class="mt-lg-5">{{$blogs->title}}</h1>

                            <div class="post-meta">
                                <span><i class="far fa-user"></i> By <a href="#">Admin</a> </span>
{{--                                <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>--}}
{{--                                <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>--}}
                            </div>

                            <img src="{{asset($blogs->photo)}}" class="img-fluid float-right mb-3 mb-1 ml-sm-4 ml-lg-5" alt="" style="width: 360px;">

                            <p class="lead">{!! $blogs->short_description !!}</p>

                            <p>{!! $blogs->description !!}</p>
{{--                            comment display start--}}
                            <div class="post-block post-comments clearfix">
                                <h4 class="mt-4 mb-3">Comments</h4>

                                <ul class="comments">
                                    @foreach($comments as $comment)
                                        @if($comment->photo)
                                            <li>
                                                <div class="comment">
                                                    <div class="img-thumbnail d-none d-sm-block">
                                                        <img class="avatar" alt="" src="{{asset($comment->photo)}}">
                                                    </div>
                                                    <div class="comment-block">
                                                        <div class="comment-arrow"></div>
                                                        <span class="comment-by">
																<strong>{{$comment->username}}</strong>


															</span>
                                                        <p>{{$comment->comment}}</p>
                                                        <span class="date float-right">{{$comment->created_at}}</span>
                                                    </div>
                                                </div>


                                            </li>
                                            @else
                                            <li>
                                                <div class="comment">
                                                    <div class="img-thumbnail d-none d-sm-block">
                                                        <img class="avatar" alt="" src="{{asset('/')}}front/img/user.png">
                                                    </div>
                                                    <div class="comment-block">
                                                        <div class="comment-arrow"></div>
                                                        <span class="comment-by">
																<strong>{{$comment->username}}</strong>


															</span>
                                                        <p>{{$comment->comment}}</p>
                                                        <span class="date float-right">{{$comment->created_at}}</span>
                                                    </div>
                                                </div>


                                            </li>
                                            @endif

                                        @endforeach


                                </ul>

                            </div>
{{--                            comment display end--}}





                            @if(Session::get('userId'))
                            <div class="post-block post-leave-comment mb-4">
                                <h4 class="mb-3">Leave a Comment</h4>

                                <form action="{{route('new.comment')}}" method="post">
                                    @csrf

                                    <div class="form-row">
                                        <div class="form-group col">
                                            <label>Comment *</label>
                                            <input type="hidden" name="id" value="{{ Session::get('userId') }}">
                                            <input type="hidden" name="blog_id" value="{{ $blogs->id }}">
                                            <textarea maxlength="5000" rows="10" class="form-control" name="comment" id="comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <input type="submit" value="Post Comment" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                                        </div>
                                    </div>
                                </form>
                            </div>
                                @else
                                <div class="alert alert-info mt-3" style="background-color: #fdf8f8" role="alert">
                                    If you want to comment, please <span><a class="pix-btn text-decoration-none" href="{{ route('user.login') }}">Login</a></span>
                                    or <span><a class="pix-btn text-decoration-none" href="{{ route('sign.up') }}">Sign Up</a></span>
                                </div>
                                @endif

                        </div>
                    </article>

                </div>
            </div>
        </div>

    </div>
    </div>
    @endsection
