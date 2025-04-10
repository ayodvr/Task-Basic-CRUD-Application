@extends('layouts.app')
@section('content')

<div class="container">
    <div class="col-md-12">
        <a href="{{ route('tasks.index', $user->id) }}" class="btn btn-info btn-sm pull-right">Back</a>
        <div class="form-area">  
            <form action="{{ route('tasks.update', ['user' => $user->id, 'task' => $task->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <h3 style="margin-bottom: 25px; text-align: center;">Task Form</h3>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" value="{{ $task->title }}" name="title" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" type="textarea" name="description" placeholder="Enter description" rows="7">{{ $task->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                        <option value="{{ $task->status }}">{{ $task->status }}</option>
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