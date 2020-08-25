@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="card-title">Add Our Impact Value</h4>
                    <p class="text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTitle">Add Value</button>
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
                                    <th scope="col">Icon</th>
                                    <th scope="col">Color</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Value</th>
                                    <th scope="col">Status</th>
                                    {{--                                    <th scope="col">Status</th>--}}
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach($impactvalues as $impactvalue)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $impactvalue->icon }}</td>
                                        <td>{{$impactvalue->color }} </td>
                                        <td>{{$impactvalue->title }} </td>
                                        <td>{{$impactvalue->value }} </td>
                                          <td></b>@if($impactvalue->status == 1) <button class="btn btn-success">Active</button> @else <button class="btn btn-warning">Inactive</button>  @endif</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#editCategory-{{ $impactvalue->id }}" data-toggle="modal" class="btn btn-primary">Edit</a>
                                                <a href="#deleteCategory-{{ $impactvalue->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Modal for delete course -->
                                    <div id="deleteCategory-{{ $impactvalue->id }}" class="modal fade">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"><i class="fa fa-trash text-danger" aria-hidden="true"></i></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('delete.impact.value') }}" method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <p>Are you want to delete this?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="id" value="{{ $impactvalue->id }}">
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="editCategory-{{ $impactvalue->id }}" class="modal fade">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Impact Value</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('update.impact.value') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label class="control-label">Fa Icon<span class="text-danger">*</span></label>
                                                            <input type="text" name="icon" class="form-control" value="{{$impactvalue->icon}}" >
                                                            <input type="hidden" name="id" class="form-control" value="{{$impactvalue->id}}" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Color<span class="text-danger">*</span></label>
                                                            <input type="text" name="color" class="form-control" value="{{$impactvalue->color}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Title<span class="text-danger">*</span></label>
                                                            <input type="text" name="title" class="form-control" value="{{$impactvalue->title}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Value<span class="text-danger">*</span></label>
                                                            <input type="text" name="value" class="form-control" value="{{$impactvalue->value}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Status</label>
                                                            <select name="status" class="form-control">
                                                                @if($impactvalue->status == 1)
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
                    <h5 class="modal-title">Add Value</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('add.impact.value') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Fa Icon<span class="text-danger">*</span></label>
                            <input type="text" name="icon" class="form-control" placeholder="fas fa-graduation-cap" required >
                        </div>
                        <div class="form-group">
                            <label class="control-label">Color<span class="text-danger">*</span></label>
                            <input type="text" name="color" class="form-control" placeholder="Color" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Title<span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" placeholder="Title" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Value<span class="text-danger">*</span></label>
                            <input type="text" name="value" class="form-control" placeholder="value" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="1" class="form-control">Active</option>
                                <option value="0" class="form-control">Inactive</option>
                            </select>

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
