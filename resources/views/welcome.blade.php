@extends('layouts.app')

@section('content')
<div class="container">
    <div class="hv">
        <p class="display-2">To Do Project</p>
            
    </div>
    <div>
      <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('projects.create')}}">Create New Project</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('projects.index')}}">Your Projects</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('AboutUs')}}">About Us</a>
                </li>
            </ul>
    </div>
</div>


@endsection