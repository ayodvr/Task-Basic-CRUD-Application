@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="mb-0">{{ $user->first_name }}'s Tasks</h5>
                
                <a href="{{ route('tasks.create', ['user' => $user->id]) }}" class="btn btn-primary btn-sm">
                    + Create Task
                </a>
            </div>
		    <hr>
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
                @if(session('success'))
                <div
                class="alert alert-success"
                style="width: 100%; margin: auto"
                >
                {{session('success')}}
            </div>
            @endif
            <br>
            @forelse ($tasks as $task )
            <div class="session-box">
    		    <div class="media align-items-center box">
                    <div class="media-object pr-4">
                        <h6 class="mb-0">{{ $loop->iteration }}.</h6>
                    </div>
                    <div class="media-body">
                        <h6 class="mt-0 mb-0">
                            {{ $task->title }}
                        </h6>
                    </div>
                    <div class="media-object pl-4 text-right">
                        @if($task->status == 'pending')
                        <p class="text-uppercase text-danger">{{ $task->status }}</p>
                        @elseif($task->status == 'in_progress')
                        <p class="text-uppercase text-info">{{ \Illuminate\Support\Str::title(str_replace('_', ' ', $task->status)) }}</p>
                        @else
                        <p class="text-uppercase text-success">{{ $task->status }}</p>
                        @endif
                        <a href="{{ route('tasks.show', ['user' => $user->id, 'task' => $task->id]) }}" class="btn btn-primary btn-sm">Show</a>
                        <a href="{{ route('tasks.edit', ['user' => $user->id, 'task' => $task->id]) }}" class="btn btn-info btn-sm">Edit</a>
                        <form action="{{ route('tasks.destroy', ['user' => $user->id, 'task' => $task->id]) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this task?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
            @empty
                <p class="text-gray-500 dark:text-gray-400">No task available yet.</p>
            @endforelse
		</div>
	</div>
</div>
@endsection