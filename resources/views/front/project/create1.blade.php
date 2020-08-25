@extends('front.project.create')
@section('content')
    <div class="col-lg-9 order-1 order-lg-2">

        <div class="overflow-hidden mb-1">
            <h2 class="font-weight-normal text-7 mb-0">Project <strong class="font-weight-extra-bold">Introduction</strong></h2>
        </div>
        <div class="overflow-hidden mb-4 pb-3">
            <p class="mb-0">Tell us about your Project.</p>
        </div>

        <form  action="{{route('final.submit.project')}}" method="POST" enctype="multipart/form-data">
            @csrf
{{--            <div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">--}}
{{--                <strong>Success!</strong> Your message has been sent to us.--}}
{{--            </div>--}}

{{--            <div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">--}}
{{--                <strong>Error!</strong> There was an error sending your message.--}}
{{--                <span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>--}}
{{--            </div>--}}

            <div class="form-row">
                <div class="form-group col">
                    <label class="font-weight-bold text-dark text-4">Project Name</label>
                    <p><font color="grey">A good title introduces and describes your project at a glance, eg: Care to Eat - A Book to Inspire Change.</font></p>
                    <input type="text"   name="project_name" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label class="font-weight-bold text-dark text-4">Project Category</label>
                    <p><font color="grey">Choose which best describes your area of impact for this Project</font></p>
                    <div class="col-lg-25">
                        <select  name="project_category" class="form-control" size="0">
                            <option value="{{('Quality Education') }}" selected="selected">Quality Education</option>
                            <option value="{{ ('Good Health & Wellbeing') }}">Good Health & Wellbeing</option>
                            <option value="{{ ('Community Involvement') }}">Community Involvement</option>
                            <option value="{{ ('Youth Development') }}">Youth Development</option>
                            <option value="{{ ('Women Empowerment') }}">Women Empowerment</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label class="font-weight-bold text-dark text-4">Project Location</label>
                    <p><font color="grey">This is the city/district in which you'll be doing the work and not the location of your organization's headquarters.</font></p>
                    <input type="text" name="location"  required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label class="font-weight-bold text-dark text-4">Project Image</label>
                    <p><font color="grey">Choose powerful images that helps tell your story. Your image should be clear, colorful, and be a reflection of your project, and should not be larger than 1MB.</font></p>
                    <input class="d-block" type="file"  name="project_image" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-0 text-center mt-4">
                    <hr class="solid mt-0 mb-4">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">

                        <button type="submit" class="btn btn-primary btn-modern">NEXT <i class="fas fa-arrow-right ml-1"></i> </button>

                </div>
            </div>




        </form>
    </div>
    @endsection
