@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="card-title">Add  Title</h4>
                    <p class="text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTitle">Add Title</button>
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
                                    <th scope="col">Title</th>
                                    <th scope="col">Sub Title</th>

                                    {{--                                    <th scope="col">Status</th>--}}
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach($helptitles as $helptitle)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $helptitle->title }}</td>
                                        <td>{{$helptitle->description }} </td>
                                        {{--                                        <td></b>@if($title->status == 1) <button class="btn btn-success">Active</button> @else <button class="btn btn-warning">Inactive</button>  @endif</td>--}}
                                        <td>
                                            <div class="d-flex">
                                                <a href="#editCategory-{{ $helptitle->id }}" data-toggle="modal" class="btn btn-primary">Edit</a>
                                                <a href="#deleteCategory-{{ $helptitle->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Modal for delete course -->
                                    <div id="deleteCategory-{{ $helptitle->id }}" class="modal fade">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"><i class="fa fa-trash text-danger" aria-hidden="true"></i></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('delete.help.title') }}" method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <p>Are you want to delete this?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="id" value="{{ $helptitle->id }}">
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="editCategory-{{ $helptitle->id }}" class="modal fade">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Help Title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('update.help.title') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label class="control-label">Title<span class="text-danger">*</span></label>
                                                            <input type="text" name="title" value="{{ $helptitle->title }}" class="form-control" >
                                                            <input type="hidden" name="id" value="{{ $helptitle->id }}" class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Sub Title<span class="text-danger">*</span></label>
                                                            <input type="text" name="description" value="{{ $helptitle->description }}" class="form-control">

                                                        </div>
                                                        {{--                                                        <div class="form-group">--}}
                                                        {{--                                                            <label class="control-label">Status</label>--}}
                                                        {{--                                                            <select name="status" class="form-control">--}}
                                                        {{--                                                                @if($title->status == 1)--}}
                                                        {{--                                                                    <option value="1" class="form-control">Active</option>--}}
                                                        {{--                                                                    <option value="0" class="form-control">Inactive</option>--}}
                                                        {{--                                                                @else--}}
                                                        {{--                                                                    <option value="0" class="form-control">Inactive</option>--}}
                                                        {{--                                                                    <option value="1" class="form-control">Active</option>--}}
                                                        {{--                                                                @endif--}}
                                                        {{--                                                            </select>--}}
                                                        {{--                                                        </div>--}}
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary">Update Save</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="addTitle" class="modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('add.help.title') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Title<span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" placeholder="How you can help" required >
                        </div>
                        <div class="form-group">
                            <label class="control-label">Sub Title<span class="text-danger">*</span></label>
                            <input type="text" name="description" class="form-control" placeholder="Here is how you can help us do more good for our communities" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Title</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

@endsection
