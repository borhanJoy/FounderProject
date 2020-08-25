@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="card-title">Add Question</h4>
                    <p class="text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTitle">Add Question</button>
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
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Question Name</th>
                                    <th scope="col">Option One</th>
                                    <th scope="col">Option Two</th>
                                    <th scope="col">Option Three</th>
                                    <th scope="col">Answer</th>
                                    <th scope="col">Suggestions</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach($questions as $question)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{$question->category}}</td>
                                        <td>{{$question->question_name}}</td>
                                        <td>{{$question->option_one}}</td>
                                        <td>{{$question->option_two}}</td>
                                        <td>{{$question->option_three}}</td>
                                        <td>{{$question->answer}}</td>
                                        <td>{{$question->suggestion}}</td>
                                        <td><img src="{{asset($question->photo)}}" width="100" height="100"></td>
                                        <td>@if($question->status == 1) <button class="btn btn-success">Active</button> @else <button class="btn btn-warning">Inactive</button>  @endif</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#editCategory-{{ $question->id }}" data-toggle="modal" class="btn btn-primary">Edit</a>
                                                <a href="#deleteCategory-{{ $question->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Modal for delete course -->
                                    <div id="deleteCategory-{{ $question->id }}" class="modal fade">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"><i class="fa fa-trash text-danger" aria-hidden="true"></i></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('delete.question') }}" method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <p>Are you want to delete this?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="id" value="{{ $question->id }}">
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="editCategory-{{ $question->id }}" class="modal fade">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Question</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('update.question') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label class="control-label">Question Category<span class="text-danger">*</span></label>
                                                            <select name="category_id" class="form-control">
                                                                @foreach($categorynames as $categoryname)
                                                                    <option value="{{$categoryname->id}}">{{$categoryname->category}}</option>
                                                                @endforeach

                                                            </select>

                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Question Name<span class="text-danger">*</span></label>
                                                            <input type="text" name="question_name" class="form-control" value="{{$question->question_name}}">
                                                            <input type="hidden" name="id" class="form-control" value="{{$question->id}}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Option One<span class="text-danger">*</span></label>
                                                            <input type="text" name="option_one" class="form-control" value="{{$question->option_one}}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Option Two<span class="text-danger">*</span></label>
                                                            <input type="text" name="option_two" class="form-control" value="{{$question->option_two}}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Option Three<span class="text-danger">*</span></label>
                                                            <input type="text" name="option_three" class="form-control" value="{{$question->option_three}}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Answwer<span class="text-danger">*</span></label>
                                                            <input type="text" name="answer" class="form-control" value="{{$question->answer}}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Suggestion<span class="text-danger">*</span></label>
                                                            <input type="text" name="suggestion" class="form-control" value="{{$question->suggestion}}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label"><img src="{{asset($question->photo)}}" width="100" height="100"></label>
                                                            <input type="file" name="photo" class="form-control" >

                                                        </div>


                                                        <div class="form-group">
                                                            <label class="control-label">Status</label>
                                                            <select name="status" class="form-control">
                                                                @if($question->status == 1)
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
                    <h5 class="modal-title">Add Question</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('add.question') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Question Category<span class="text-danger">*</span></label>
                            <select name="category_id" class="form-control">
                                @foreach($categorynames as $categoryname)
                                <option value="{{$categoryname->id}}">{{$categoryname->category}}</option>
                                    @endforeach

                            </select>

                        </div>
                        <div class="form-group">
                            <label class="control-label">Question Name<span class="text-danger">*</span></label>
                            <input type="text" name="question_name" class="form-control" required>

                        </div>
                        <div class="form-group">
                            <label class="control-label">Option One<span class="text-danger">*</span></label>
                            <input type="text" name="option_one" class="form-control" required>

                        </div>
                        <div class="form-group">
                            <label class="control-label">Option Two<span class="text-danger">*</span></label>
                            <input type="text" name="option_two" class="form-control" required>

                        </div>
                        <div class="form-group">
                            <label class="control-label">Option Three<span class="text-danger">*</span></label>
                            <input type="text" name="option_three" class="form-control" required>

                        </div>
                        <div class="form-group">
                            <label class="control-label">Answwer<span class="text-danger">*</span></label>
                            <input type="text" name="answer" class="form-control" required>

                        </div>
                        <div class="form-group">
                            <label class="control-label">Suggestion<span class="text-danger">*</span></label>
                            <input type="text" name="suggestion" class="form-control" required>

                        </div>
                        <div class="form-group">
                            <label class="control-label">Question Image<span class="text-danger">*</span></label>
                            <input type="file" name="photo" class="form-control" required>

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
