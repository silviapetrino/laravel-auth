@extends('layouts.admin')

@section('content')


<div class="container">
    <h1>Projects List</h1>

    @foreach ($projects as $project)
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <th scope="row">{{ $project->id }}</th>
            <td>{{ $project->title }}</td>
            <td>{{ $project->description }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('admin.projects.show' , $project)}}"><i class="fa-solid fa-eye"></i></a>
            </td>
          </tr>

        </tbody>
      </table>

    @endforeach

    {{ $projects->links()}}

</div>


@endsection
