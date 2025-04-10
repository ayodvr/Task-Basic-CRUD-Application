@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-12">
		    <h5>Users</h5><hr>
            @foreach ($users as $user )
            <div class="session-box">
    		    <div class="media align-items-center box">
                    <div class="media-object pr-4">
                        <h6 class="mb-0">{{ $loop->iteration }}.</h6>
                    </div>
                    <div class="media-body">
                        <div class="media align-items-center sm-avatar">
                            <div class="media-object pr-3">
                                <img src="https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png" class="img-fluid rounded" alt="">
                            </div>
                            <div class="media-body">
                                <h6 class="m-0">Full Name: {{ $user->first_name." ".$user->last_name }}</h6>
                                <p class="mb-0">Email: {{ $user->email }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="media-object pl-4 text-right">
                        <a href="{{ route('tasks.index', $user->id) }}" class="btn btn-primary btn-sm">View Tasks</a><br>
                    </div>
                </div>
            </div>
            @endforeach
		</div>
	</div>
</div>
@endsection