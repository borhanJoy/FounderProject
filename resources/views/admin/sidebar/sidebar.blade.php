<div id="sidebar-main" class="sidebar sidebar-default">
    <div class="sidebar-content">
        <ul class="navigation">
            <li>
                {{--                        {{ route('admin.dashboard') }}--}}
                <a href="{{route('home')}}"><i class="fa fa-home"></i> <span>Dashboard</span></a>
            </li>
{{--            Home section start --}}


            <li>

                <a href="javascript:void(0);"><i class="fa fa-th"></i> <span>Home Section</span></a>

                {{--            Home Slider section start--}}

                        <ul @if(request()->path()=='slider/section') style="display: block;" @endif>
                            <li>
                                <a class="@if(request()->path() == 'slider/section') btn-success @endif"
                                   href="{{ route('create.slider.section') }}">Slider Section</a>
                            </li>

                        </ul>

                {{--            Home Slider section end--}}

                <ul @if(request()->path() == 'partner/title') style="display: block;"
                    @elseif(request()->path()=='partner/image') style="display: block;"

                    @endif>
                    <li>
                        <a href="javascript:void(0);" ><span>Partner Section</span></a>
                        <ul >
                            <li>
                                <a class="@if(request()->path() == 'partner/title') btn-success @endif"
                                href="{{ route('create.partner.title') }}">Title</a>
                            </li>
                            <li>
                                <a class="@if(request()->path() == 'partner/image') btn-success @endif"
                                   href="{{ route('create.partner.image') }}">Image</a>
                            </li>

                        </ul>
                    </li>
                </ul>
                <ul>
                    <li class="@if(request()->path() == 'whatwedo/title') active
                                          @elseif(request()->path()=='whatwedo/image') active

                                       @endif">
                        <a href="javascript:void(0);"><span>What We Do</span></a>
                        <ul>
                            <li>
                                <a class="@if(request()->path() == 'whatwedo/title') bg-success @endif"
                                   href="{{route('create.whatwedo.title')}}">Title</a>
                            </li>
                            <li>
                                <a class="@if(request()->path() == 'whatwedo/image') bg-success @endif"
                                 href="{{route('create.whatwedo.image')}}">Image</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
{{--            Home section end--}}
{{--            Who we are start--}}
            <li>
                <a href="javascript:void(0);"><i class="fa fa-th"></i><span> We Are Section</span></a>
                <ul @if(request()->path()== 'create/we') style="display: block;"

                    @endif>
                    <li>
                        <a class="@if(request()->path()=='create/we') btn-success @endif" href="{{route('create.we.are')}}">Add we are</a>
                    </li>

                </ul>

            </li>

{{--            Who we are end--}}

            {{--                logo start--}}
            <li>
                <a href="javascript:void(0);"><i class="fa fa-th"></i><span>Logo Section</span></a>
                <ul @if(request()->path()== 'logo/one') style="display: block;"
                    @elseif(request()->path()=='logo/two') style="display: block;"
                    @endif>
                    <li>
                        <a class="@if(request()->path()=='logo/one') btn-success @endif" href="{{route('create.logo.one')}}">Add Logo One</a>
                    </li>
                    <li>
                        <a class="@if(request()->path()=='logo/two') btn-success @endif" href="{{route('create.logo.two')}}">Add Logo Two</a>
                    </li>
                </ul>

            </li>
            {{--                logo end--}}
            {{--                how can help start--}}
            <li>
                <a href="javascript:void(0);"><i class="fa fa-th"></i><span>Help Section</span></a>
                <ul @if(request()->path()== 'help/title') style="display: block;"

                    @endif>
                    <li>
                        <a class="@if(request()->path()=='help/title') btn-success @endif" href="{{route('create.help.title')}}">Add Title</a>
                    </li>

                </ul>

            </li>

            {{--                how can help end--}}
{{--            my planet section start--}}
            <li>
                <a href="javascript:void(0);"><i class="fa fa-th"></i><span>My Planet</span></a>
                <ul @if(request()->path()=='planet') style="display: block;"
                    @elseif(request()->path()=='planet/category') style="display: block;"
                    @elseif(request()->path()=='planet/question') style="display: block;"

                    @endif>
                    <li>
                        <a class="@if(request()->path()=='planet') btn-success @endif" href="{{route('create.planet')}}">Add Planet</a>
                    </li>
                    <li>
                        <a class="@if(request()->path()=='planet/category') btn-success @endif" href="{{route('create.category')}}">Add Category</a>
                    </li>
                    <li>
                        <a class="@if(request()->path()=='planet/question') btn-success @endif" href="{{route('create.question')}}">Add Questions</a>
                    </li>
                </ul>

            </li>

{{--            my planet section end--}}

            {{--            Our impact since start--}}
            <li>
                <a href="javascript:void(0);"><i class="fa fa-th"></i><span>Our Impact Section</span></a>
                <ul @if(request()->path()== 'impact/title') style="display: block;"
                    @elseif(request()->path()=='impact/image') style="display: block;"
                    @elseif(request()->path()=='impact/value') style="display: block;"
                    @endif>
                    <li>
                        <a class="@if(request()->path()=='impact/title') btn-success @endif" href="{{route('create.impact.title')}}">Add Title</a>
                    </li>
                    <li>
                        <a class="@if(request()->path()=='impact/image') btn-success @endif" href="{{route('create.impact.image')}}">Add BG Img</a>
                    </li>
                    <li>
                        <a class="@if(request()->path()=='impact/value') btn-success @endif" href="{{route('create.impact.value')}}">Add Value</a>
                    </li>
                </ul>

            </li>

            {{--            Our impact since end--}}

{{--            Blog Section start--}}
            <li>
                <a href="javascript:void(0);"><i class="fa fa-th"></i><span>Blog Section</span></a>
                <ul @if(request()->path()== 'blog/section') style="display: block;"
                    @elseif(request()->path()=='create/blog') style="display: block;"
                    @elseif(request()->path()=='manage/comments') style="display: block;"
                    @endif>
                    <li>
                        <a class="@if(request()->path()=='blog/section') btn-success @endif" href="{{route('create.blog.title')}}">Add Title</a>
                    </li>
                    <li>
                        <a class="@if(request()->path()=='create/blog') btn-success @endif" href="{{route('create.blog')}}">Add Blog</a>
                    </li>
                    <li>
                        <a class="@if(request()->path()=='manage/comments') btn-success @endif" href="{{route('manage.comments')}}">Manage Comments</a>
                    </li>
                </ul>

            </li>
{{--            Blog Section end--}}
{{--            Contact us start--}}
            <li>
                <a href="javascript:void(0);"><i class="fa fa-th"></i><span>Contact Section</span></a>
                <ul @if(request()->path()== 'create/contact') style="display: block;"
                    @elseif(request()->path()== 'create/social') style="display: block;"

                    @endif>
                    <li>
                        <a class="@if(request()->path()=='create/contact') btn-success @endif" href="{{route('create.contact')}}">Add Contact</a>
                    </li>
                    <li>
                        <a class="@if(request()->path()=='create/social') btn-success @endif" href="{{route('create.social.link')}}">Add Social Link</a>
                    </li>

                </ul>

            </li>

{{--            Contact us end--}}
{{--            submitted project start--}}
            <li>
                <a href="javascript:void(0);"><i class="fa fa-th"></i><span>View Submitted Project</span></a>
                <ul @if(request()->path()== 'view/project') style="display: block;"


                    @endif>
                    <li>
                        <a class="@if(request()->path()=='view/project') btn-success @endif" href="{{route('view.project.submission')}}">View Project Submission</a>
                    </li>


                </ul>

            </li>
{{--            submitted project end--}}




        </ul>
    </div>
</div>
