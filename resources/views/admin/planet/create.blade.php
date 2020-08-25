@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="card-title">Add Planet</h4>
                    <p class="text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTitle">Add Planet</button>
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
                                    <th scope="col">Button text</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach($planets as $planet)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{$planet->title}}</td>
                                        <td>{{$planet->subtitle}}</td>
                                        <td>{{$planet->button_txt}}</td>
                                        <td>{{$planet->icon}}</td>
                                        <td><img src="{{asset($planet->photo)}}" width="100" height="100"></td>
                                        <td>@if($planet->status == 1) <button class="btn btn-success">Active</button> @else <button class="btn btn-warning">Inactive</button>  @endif</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#editCategory-{{ $planet->id }}" data-toggle="modal" class="btn btn-primary">Edit</a>
                                                <a href="#deleteCategory-{{ $planet->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Modal for delete course -->
                                    <div id="deleteCategory-{{ $planet->id }}" class="modal fade">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"><i class="fa fa-trash text-danger" aria-hidden="true"></i></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('delete.planet') }}" method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <p>Are you want to delete this?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="id" value="{{ $planet->id }}">
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="editCategory-{{ $planet->id }}" class="modal fade">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Planet</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('update.planet') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label class="control-label">Planet Title<span class="text-danger">*</span></label>
                                                            <input type="text" name="title" class="form-control" value="{{$planet->title}}">
                                                            <input type="hidden" name="id" class="form-control" value="{{$planet->id}}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Planet Sub Title<span class="text-danger">*</span></label>
                                                            <input type="text" name="subtitle" class="form-control" value="{{$planet->subtitle}}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label"><img src="{{asset($planet->photo)}}" style="width: 200px;height: 200px;"><span class="text-danger">*</span></label>
                                                            <input type="file" name="photo" class="form-control">

                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Planet Fa Text<span class="text-danger">*</span></label>
                                                            <input type="text" name="icon" class="form-control" value="{{$planet->icon}}">

                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label">Planet Button Text<span class="text-danger">*</span></label>
                                                            <input type="text" name="button_txt" class="form-control" value="{{$planet->button_txt}}">

                                                        </div>


                                                        <div class="form-group">
                                                            <label class="control-label">Status</label>
                                                            <select name="status" class="form-control">
                                                                @if($planet->status == 1)
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
                    <h5 class="modal-title">Add Planet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('add.planet') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Planet Title<span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" required>

                        </div>
                        <div class="form-group">
                            <label class="control-label">Planet Sub Title<span class="text-danger">*</span></label>
                            <input type="text" name="subtitle" class="form-control" required>

                        </div>
                        <div class="form-group">
                            <label class="control-label">Planet BG Image<span class="text-danger">*</span></label>
                            <input type="file" name="photo" class="form-control" required>

                        </div>
                        <div class="form-group">
                            <label class="control-label">Planet Fa Text<span class="text-danger">*</span></label>
                            <input type="text" name="icon" class="form-control" required>

                        </div>

                        <div class="form-group">
                            <label class="control-label">Planet Button Text<span class="text-danger">*</span></label>
                            <input type="text" name="button_txt" class="form-control" required>

                        </div>


                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="1" class="form-control">Active</option>
                                <option value="0" class="form-control">Inactive</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save </button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

@endsection
