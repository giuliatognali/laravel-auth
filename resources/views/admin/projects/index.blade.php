@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <h2 class="text-secondary">Lista dei progetti</h2>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Content</th>
                <th scope="col">Slug</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{$project->id}}</th>
                    <td>{{$project->name}}</td>
                    <td>{{$project->content}}</td>
                    <td>{{$project->slug}}</td>
                    <td>
                        <ul class="d-flex gap-1 list-unstyled m-0">
                            <li><a href="{{route('admin.projects.show', $project->slug)}}" class='btn btn-primary'>Show</a></li>
                            <li><a href="" class='btn btn-warning'>Edit</a></li>
                            <li><a href="" class='btn btn-danger'>Delete</a></li>
                        </ul>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection