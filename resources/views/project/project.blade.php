@extends('layouts.app')

@section('content')
<div class="container">
	@include('layouts.session')
	@include('layouts.errors')
	<div class="card">
		<div class="card-header d-flex justify-content-between">
			<h4>{{$project->name}}</h4>
			<div class="ml-auto ">
			<form method="POST" action="{{route('projects.destroy',$project->id)}}">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger mr-2">Delete Project</button>
			</form>
			</div>
			<a href="{{route('projects.edit',['project'=>$project->id])}}" class="btn btn-primary">Edit Project</a>
		</div>
		<div class="card-body"><p  class="text-justify">{{$project->description}}</p></div>
	</div></br>
</div>
@endsection