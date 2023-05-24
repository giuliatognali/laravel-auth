@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-start">
            <h2 class="text-secondary">Edit project: {{ $project->name}}</h2>
            
            {{-- errori di validazione --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.projects.update', $project) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name', $project->name)}}">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content">{{old('content', $project->content)}}</textarea>
                </div>
                <button type="submit" class="btn btn-warning">Confirm edit</button>
            </form>
        </div>
    </div>
@endsection
