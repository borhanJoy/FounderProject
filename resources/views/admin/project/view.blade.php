@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="card-title">View Submitted Project</h4>
                    <p class="text-right">
{{--                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTitle">Add Category</button>--}}
                    </p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card-body">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="table_id">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Project Name</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Project Image</th>
                                    <th scope="col">Short Details</th>
                                    <th scope="col">Full Details</th>
                                    <th scope="col">Project file</th>
                                    <th scope="col">Project Budget</th>

                                    {{--                                    <th scope="col">Status</th>--}}
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach($projects as $project)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $project->project_name }}</td>
                                        <td>{{ $project->project_category }}</td>
                                        <td>{{ $project->location }}</td>
                                        <td>
                                            <a href="{{ asset($project->project_image) }}" target="_blank">
                                                <img src="{{asset($project->project_image)}}" width="100" height="100">
                                            </a>
                                        </td>
                                        <td>{{ $project->short_details }}</td>
                                        <td>{{ $project->full_details }}</td>
                                        <td>
{{--                                            @if($project->details_file == 'jpg' or 'jpeg')--}}
{{--                                                @else--}}
{{--                                                @endif--}}
{{--                                           @php--}}
{{--                                            $extensionImage = ["jpg","jpeg"]; // all extension type for images--}}
{{--                                            $extensionWord = ["DOCX","docx","doc","docx","pdf","PDF","PPTX","pptx"]; // all extension type for images--}}

{{--                                            $isImage ={{$project->details_file->getClientOriginalExtension();}} ; // the extension of file .--}}
{{--                                            $isImage2 = $isImage->getClientOriginalExtension(); // the extension of file .--}}

{{--                                           if(in_array($isImage , $extensionImage)--}}


{{--                                            @endphp--}}

{{--                                           <a target="_blank" href="{{asset($project->details_file)}}">--}}
{{--                                            <img src="{{asset($project->details_file)}}"  alt="" style="width: 200px; height: 200px;">--}}
{{--                                               <embed src="{{asset($project->details_file)}}  " frameborder="0" width="100%" height="400px">--}}
{{--                                           </a>--}}
                                            @if($project->details_file)
                                            <div class="d-flex">
                                            <a href="{{ asset($project->details_file) }}" target="_blank" class="btn btn-primary btn-lg">
                                                Click Here
{{--                                                <img src="{{asset($project->details_file)}}" alt="Click Here" height="70" width="70">--}}
                                            </a>
                                            </div>
                                            @else
                                                <div class="d-flex">
                                                    <a href="#" target="_blank" class="btn btn-danger btn-lg" disabled>
                                                       No File
                                                        {{--                                                <img src="{{asset($project->details_file)}}" alt="Click Here" height="70" width="70">--}}
                                                    </a>
                                                </div>
                                            @endif

{{--                                            @if($project->details_file)--}}
{{--                                                <a href="{{ route('file.download',['id'=>$project->id ])}}" class="btn btn-primary">Download</a>--}}
{{--                                                @else--}}
{{--                                                <a href="#" class="btn btn-danger">No File</a>--}}
{{--                                                @endif--}}




                                        </td>
                                        <td>{{ $project->project_budget }}</td>

                                        <td>
                                            @if($project->is_accepted)
                                                <div class="d-flex">
                                                    <button type="button" class="btn btn-success btn-lg">Accepted</button>
                                                </div>
                                            @else
                                            <div class="d-flex">
                                                <a href="{{route('admin.project.accept',['id'=>$project->id])}}" class="btn btn-info btn-lg">Do you accept?</a>
{{--                                                <a href="#editCategory-{{ $category->id }}" data-toggle="modal" class="btn btn-primary">Edit</a>--}}
{{--                                                <a href="#deleteCategory-{{ $category->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>--}}
                                            </div>
                                                @endif
                                        </td>
                                    </tr>
                                    <!-- Modal for delete course -->
{{--                                    <div id="deleteCategory-{{ $category->id }}" class="modal fade">--}}
{{--                                        <div class="modal-dialog" role="document">--}}
{{--                                            <div class="modal-content">--}}
{{--                                                <div class="modal-header">--}}
{{--                                                    <h5 class="modal-title"><i class="fa fa-trash text-danger" aria-hidden="true"></i></h5>--}}
{{--                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                                        <span aria-hidden="true">&times;</span>--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                                <div class="modal-body">--}}
{{--                                                    <form action="{{ route('delete.category') }}" method="POST">--}}
{{--                                                        @csrf--}}
{{--                                                        <div class="modal-body">--}}
{{--                                                            <p>Are you want to delete this?</p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="modal-footer">--}}
{{--                                                            <input type="hidden" name="id" value="{{ $category->id }}">--}}
{{--                                                            <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                                                        </div>--}}
{{--                                                    </form>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div id="editCategory-{{ $category->id }}" class="modal fade">--}}
{{--                                        <div class="modal-dialog" role="document">--}}
{{--                                            <div class="modal-content">--}}
{{--                                                <div class="modal-header">--}}
{{--                                                    <h5 class="modal-title">Edit Category Name</h5>--}}
{{--                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                                        <span aria-hidden="true">&times;</span>--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                                <div class="modal-body">--}}
{{--                                                    <form action="{{ route('update.category') }}" method="POST" enctype="multipart/form-data">--}}
{{--                                                        @csrf--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label class="control-label">Category Name<span class="text-danger">*</span></label>--}}
{{--                                                            <input type="text" name="category" value="{{ $category->category }}" class="form-control" >--}}
{{--                                                            <input type="hidden" name="id" value="{{ $category->id }}" class="form-control" >--}}
{{--                                                        </div>--}}

{{--                                                        <div class="form-group">--}}
{{--                                                            <label class="control-label">Status</label>--}}
{{--                                                            <select name="status" class="form-control">--}}
{{--                                                                @if($category->status == 1)--}}
{{--                                                                    <option value="1" class="form-control">Active</option>--}}
{{--                                                                    <option value="0" class="form-control">Inactive</option>--}}
{{--                                                                @else--}}
{{--                                                                    <option value="0" class="form-control">Inactive</option>--}}
{{--                                                                    <option value="1" class="form-control">Active</option>--}}
{{--                                                                @endif--}}
{{--                                                            </select>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <button type="submit" class="btn btn-primary">Update Save</button>--}}
{{--                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                                                        </div>--}}
{{--                                                    </form>--}}

{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                @endforeach

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        {{ $projects->links() }}--}}
    </div>



@endsection
