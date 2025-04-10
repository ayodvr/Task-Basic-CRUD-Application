@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-12">
        <a href="{{ route('tasks.index', $user->id) }}" class="btn btn-info btn-sm">Back</a>
    </br></br>
        @if(count($errors) > 0) 
            @foreach($errors->all() as $error)
            <div
                class="alert alert-danger"
                style="width: 100%; margin: auto"
                >
                {{$error}}
            </div>
            @endforeach
            @endif
  
        <div class="form-area">  
            <form action="{{ route('tasks.store', $user->id) }}" method="POST">
                @csrf
                <h3 style="margin-bottom: 25px; text-align: center;">Task Form</h3>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" type="textarea" name="description" id="description" placeholder="Enter description" rows="7"></textarea>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                        <option value="">Select status</option>
                        <option value="pending">Pending</option>
                        <option value="in_progress">In Progress</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>
            <button type="submit" class="btn btn-primary pull-right">Submit Form</button>
            </form>
        </div>
    </div>
    </div>
@endsection