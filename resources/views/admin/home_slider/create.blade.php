@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="card-title">Add Home Slider</h4>
                    <p class="text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTitle">Add Partner Image</button>
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
                                    <th scope="col">Slug</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach($homeslides as $homeslide)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{$homeslide->title}}</td>
                                        <td>{{$homeslide->slug}}</td>
                                        <td><img src="{{asset($homeslide->photo)}}" width="100" height="100"></td>
                                        <td>@if($homeslide->status == 1) <button class="btn btn-success">Active</button> @else <button class="btn btn-warning">Inactive</button>  @endif</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#editCategory-{{ $homeslide->id }}" data-toggle="modal" class="btn btn-primary">Edit</a>
                                                <a href="#deleteCategory-{{ $homeslide->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Modal for delete course -->
                                    <div id="deleteCategory-{{ $homeslide->id }}" class="modal fade">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"><i class="fa fa-trash text-danger" aria-hidden="true"></i></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('delete.slider.section') }}" method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <p>Are you want to delete this?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="id" value="{{ $homeslide->id }}">
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="editCategory-{{ $homeslide->id }}" class="modal fade">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Slider Image</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('update.slider.section') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label class="control-label">Title</label>
                                                            <input type="text" name="title" class="form-control" value="{{$homeslide->title}}">

                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label">Slug</label>
                                                            <input type="text" name="slug" class="form-control" value="{{$homeslide->slug}}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label"><img src="{{asset($homeslide->photo)}}" width="200" height="200"></label>
                                                            <input type="file" name="photo"  class="form-control" placeholder="name">
                                                            <input type="hidden" name="id" value="{{ $homeslide->id }}" class="form-control" placeholder="name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Status</label>
                                                            <select name="status" class="form-control">
                                                                @if($homeslide->status == 1)
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
                    <h5 class="modal-title">Add Home Slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('add.slider.section') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label class="control-label">Slider Title<span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" placeholder="Title" required>

                        </div>

                        <div>
                            <label class="control-label">Slider Slug<span class="text-danger">*</span></label>
                            <input type="text" name="slug" class="form-control"  placeholder="Slug" required>

                        </div>

                        <div class="form-group">
                            <label class="control-label">Slider Image<span class="text-danger">*</span></label>
                            <input type="file" name="photo" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <select name="status" class="form-control" required>
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
