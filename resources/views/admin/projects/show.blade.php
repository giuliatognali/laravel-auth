@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <h2 class="text-secondary">{{$project->name}}</h2>
        <p>{{$project->content}}</p>    
    </div>
</div>
@endsection