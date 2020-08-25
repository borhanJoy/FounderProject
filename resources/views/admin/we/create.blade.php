@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="card-title">Add We Are</h4>
                    <p class="text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTitle">Add We Are</button>
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
                                    <th scope="col">Short Description</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                    {{--                                    <th scope="col">Status</th>--}}
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach($weares as $weare)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $weare->title }}</td>
                                        <td>{{ $weare->short_description }}</td>
                                        <td>{!! $weare->description !!} </td>

                                        <td>@if($weare->status == 1) <button class="btn btn-success">Active</button> @else <button class="btn btn-warning">Inactive</button>  @endif</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#editCategory-{{ $weare->id }}" data-toggle="modal" class="btn btn-primary">Edit</a>
                                                <a href="#deleteCategory-{{ $weare->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Modal for delete course -->
                                    <div id="deleteCategory-{{ $weare->id }}" class="modal fade">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"><i class="fa fa-trash text-danger" aria-hidden="true"></i></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('delete.we.are') }}" method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <p>Are you want to delete this?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="id" value="{{ $weare->id }}">
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="editCategory-{{ $weare->id }}" class="modal fade">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit We Are</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('update.we.are') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label class="control-label">Title<span class="text-danger">*</span></label>
                                                            <input type="text" name="title" class="form-control" value="{{$weare->title}}"  >
                                                            <input type="hidden" name="id" class="form-control" value="{{$weare->id}}"  >

                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Short Description<span class="text-danger">*</span></label>
                                                            <input type="text" name="short_description" class="form-control" value="{{$weare->short_description}}"  >
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Description<span class="text-danger">*</span></label>
                                                            <textarea name="description" id="editor" >{!! $weare->description !!}</textarea>
{{--                                                            <input type="text" name="icon" class="form-control" value="{{$weare->icon}}" >--}}
                                                        </div>


                                                        <div class="form-group">
                                                            <label class="control-label">Status</label>
                                                            <select name="status" class="form-control">
                                                                @if($weare->status == 1)
                                                                    <option value="1" class="form-control">Active</option>
                                                                    <option value="0" class="form-control">Inactive</option>
                                                                @else
                                                                    <option value="0" class="form-control">Inactive</option>
                                                                    <option value="1" class="form-control">Active</option>
                                                                @endif
                                                            </select>
                                                        </div>
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
                    <h5 class="modal-title">Add Social Link</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('add.we.are') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Title<span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" placeholder="Enter title" required >
{{--                            <span class="text-danger">{{$errors->has('title') ? $errors->first('title') : ' '}}</span>--}}
                        </div>
                        <div class="form-group">
                            <label class="control-label">Short Description<span class="text-danger">*</span></label>
                            <input type="text" name="short_description" class="form-control" placeholder="Enter short description" required >

                        </div>
                        <div class="form-group">
                            <label class="control-label">Description<span class="text-danger">*</span></label>
                            <textarea name="description" id="editor" required></textarea>

                        </div>


                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="1" class="form-control">Active</option>
                                <option value="0" class="form-control">Inactive</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save We Are</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

@endsection
