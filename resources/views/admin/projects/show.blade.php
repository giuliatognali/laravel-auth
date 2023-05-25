@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <h2 class="text-secondary">{{$project->name}}</h2>
        <div>
        <img src="{{asset('storage/'. $project->image)}}" alt="{{$project->name}}">    
        </div> 
        <p>{{$project->content}}</p>   

    </div>
</div>
@endsection