@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-12">
            <a href="{{ route('tasks.index', $user->id) }}" class="btn btn-info btn-sm pull-right">Back</a>
            <br><br>
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="mb-0">{{ $task->title }}</h5>
            </div>
		    <hr>
            <div class="session-box">
    		    <div class="media align-items-center box">
                    <div class="media-body">
                        <h6 class="mt-0 mb-0">
                            {{ $task->description }}
                        </h6>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>
@endsection