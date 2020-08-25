@extends('front.project.create')
@section('content')
<div class="col-lg-9 order-1 order-lg-2">

{{--    <div class="overflow-hidden mb-1">--}}
{{--        <h2 class="font-weight-normal text-7 mb-0">Project <strong class="font-weight-extra-bold">Funding</strong></h2>--}}
{{--    </div>--}}
{{--    <div class="overflow-hidden mb-4 pb-3">--}}
{{--        <p class="mb-0">What funds do you need to make your project a reality?</p>--}}
{{--    </div>--}}
@foreach($projects as $project)
        <form  action="{{route('final.submit.project.3')}}" method="POST" enctype="multipart/form-data">
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
            <label class=" font-weight-bold text-dark text-4">Project budget </label>
            <p><font color="grey">This represents the Total Amount you need to raise in order to achieve a concrete and worthwhile goal. This amount should reflect the amount of money you need to raise to make your project a reality, so be sure it covers your budget. This amount should also cover all fees and costs incurred by any rewards you may want to deliver during your project.</font></p>
            <textarea maxlength="170"  name="project_budget" rows="1" class="form-control"  required></textarea>
            <input type="hidden" name="id" value="{{$project->id}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col">
            <label class=" font-weight-bold text-dark text-4">Funding Details - Breakdown</label>
            <p><font color="grey">Attach a file, in excel or word format, with the specifics of how you plan on using the Fund. Break down the total amount into parts such as Food items, Stationary, Labor costs etc.</font></p>
            <input class="d-block" type="file" name="details_file" required>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-0 text-center mt-4">
            <hr class="solid mt-0 mb-4">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col">
             <button type="submit" class="btn btn-primary btn-modern">SUBMIT <i class="fas fa-arrow-right ml-1"></i> </button>
        </div>
    </div>
</form>
@endforeach
</div>
@endsection
