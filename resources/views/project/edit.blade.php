@extends('layouts.app')

@section('content')
	<div class="container">
		@include('layouts.session')
		@include('layouts.errors')

	  	<h2>Edit your project</h2>

	  	<form method="POST" action="{{route('projects.update',['project'=>$project->id])}}">
	  		@csrf
	  		@method('PATCH')

	    	<div class="form-group">
	      		<label for="name">Name:</label>
	      		<input type="text" class="form-control" name="name" value="{{$project->name}}">
	    	</div>

	    	<div class="form-group">
	      		<label for="description">Description:</label>
	      		<textarea name="description" class="form-control" rows="5">{{$project->description}}</textarea>
	    	</div>
	    
	     <div class="d-flex justify-content-start">
	     	<button type="submit" class="btn btn-primary mr-5">Update</button>
	     	<a href="{{route('projects.index')}}" class="btn btn-primary mr-5">All Projects</a>
	     </div>
	  </form>
	</div>
@endsection