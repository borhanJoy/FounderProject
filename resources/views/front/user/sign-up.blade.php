@extends('front.master')

@section('body')
    <div class="container">
        <div class="mt-5">

        <div class="col-md-12">
            <div class="card mt-10">
                <h1 class="mt-4 mb-3 text-center"></h1>
                <div class="card-body">
                    <h1 class="mt-4 mb-3 text-center">Sign Up Now!</h1>
                    <form action="{{route('user.registration')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Username<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="username" placeholder="Username*" required>

                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Email<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="email" placeholder="Eamil*"  required>

                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Password<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="password" name="password" placeholder="Password*"  required>

                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Image<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="file" name="photo">

                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit"  class="pix-btn" value="Register">

                            </div>

                        </div>

                    </form>

                </div>

            </div>


        </div>
    </div>
    </div>
{{--    <section class="signin signup">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12 col-sm-12">--}}
{{--                    <div class="signin-from-wrapper" style="height: 550px!important;">--}}
{{--                        <div class="signin-from-inner">--}}
{{--                            <h2 class="title">Sign Up Now!</h2>--}}
{{--                            @foreach($errors->all() as $error)--}}
{{--                                <div class="alert alert-danger" role="alert">--}}
{{--                                    {{ $error }}--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                            <form action="#" class="singn-form" method="POST">--}}
{{--                                @csrf--}}

{{--                                <input type="email" name="email" placeholder="Email*" required>--}}
{{--                                <input type="password" name="password" placeholder="Password*" required>--}}
{{--                                <input type="file" name="photo">--}}

{{--                                <button type="submit" class="pix-btn">Sign Up</button>--}}
{{--                                <p>Already have an account? <a href="#">Sign in</a> now.</p>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                        <ul class="animate-ball">--}}
{{--                            <li class="ball"></li>--}}
{{--                            <li class="ball"></li>--}}
{{--                            <li class="ball"></li>--}}
{{--                            <li class="ball"></li>--}}
{{--                            <li class="ball"></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="signin-banner signup-banner">--}}
{{--            <div class="animate-image-inner">--}}
{{--                <div class="image-one"><img src="media/animated/signup.png" alt="" class="wow pixFadeLeft"></div>--}}
{{--                <div class="image-two"><img src="media/animated/signup2.png" alt="" class="wow pixFadeRight"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
@endsection

