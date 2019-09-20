@extends('layouts.app')

@section('content')
<div class="container">
		<div class="mb-5"><h4>Create New Project</h4></div>
		@include('layouts.session')
		@include('layouts.errors')
		<form method="POST" action="{{route('projects.store')}}">
			@csrf
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" name="name" class="form-control {{$errors->has('name')? 'border-danger':''}}" placeholder="Project Name" value="{{old('name')}}">
			</div>

			<div class="form-group">
				<label for="description">Description:</label>
				<textarea name="description" class="form-control {{$errors->has('description')? 'border-danger':''}}" rows="5" placeholder="Project Description">{{old('description')}}</textarea>
			</div>

			<button type="submit" class="btn btn-primary">Create Project</button>
		</form>
	</div>
@endsection