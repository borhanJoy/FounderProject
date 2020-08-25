@extends('front.project.create')
@section('content')
<div class="col-lg-9 order-1 order-lg-2">


    @foreach($projects as $project)
<form  action="{{route('final.submit.project.2')}}" method="POST" enctype="multipart/form-data">
    @csrf
{{--    <div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">--}}
{{--        <strong>Success!</strong> Your message has been sent to us.--}}
{{--    </div>--}}

{{--    <div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">--}}
{{--        <strong>Error!</strong> There was an error sending your message.--}}
{{--        <span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>--}}
{{--    </div>--}}

    <div class="form-row">
        <div class="form-group col">
            <label class=" font-weight-bold text-dark text-4">Project Summary - short details</label>
            <p><font color="grey">Your summary sentence can be up to 170 characters. This summary sentence should be descriptive, informative, concise, and powerful. Eg: We wish to celebrate the creativity of the children our refugee and migrant communities in Chittagong.</font></p>
            <textarea maxlength="170"  rows="2" class="form-control" name="short_details" required></textarea>
            <input type="hidden" name="id" value="{{$project->id}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col">
            <label class="font-weight-bold text-dark text-4">Your Story - Full Details</label>
            <p><font color="grey">Add enough details to introduce your project to someone who knows nothing about you and your organization. Be clear, concise, and honest. Avoid use of excessive facts, numbers of figures unless it is crucial to explain your project.</font></p>
            <p><font color="grey">Some suggested headers are - Who We Are, Our Project, Why It Matters, and How You Can Help.</font></p>
            <textarea maxlength="8000" d rows="9" class="form-control" name="full_details"  required></textarea>
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
@endforeach
</div>
    @endsection
