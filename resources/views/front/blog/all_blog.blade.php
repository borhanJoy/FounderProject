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

            <div class="row mb-4">
                @foreach($blogs as $blog)
                <div class="col-lg-6">
                    <div class="recent-posts mt-4 mb-4">
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
                            <p>{!! $blog->short_description !!}</p>
                            <a class="mt-3" href="{{route('blog.details',['id'=>$blog->id,'title'=>$blog->title])}}">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                        </article>
                    </div>
                </div>
                    @endforeach

            </div>

        </div>
    </div>
    @endsection
