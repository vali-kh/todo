@extends('layouts.app')

@section('content')
<div class="container">
	@include('layouts.errors')
	@include('layouts.session')
	<div class="d-flex flex-wrap align-content-end mb-3">
		<div class="mr-auto"><h2>Projects</h2></div>
		<div><a href="{{route('projects.create')}}" class="btn btn-primary">New Project</a></div>
	</div>
	<div class="list-group mb-5">
		@foreach($projects as $pro)
			<h3>
				<a href="{{route('projects.show',['project' => $pro->id])}}" class="list-group-item list-group-item-action">{{$pro->name}}</a>
			</h3>
		@endforeach
	</div>
	<div class="d-flex justify-content-center">{{ $projects->links() }}</div>
</div>

@endsection