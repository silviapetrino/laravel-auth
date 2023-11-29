@extends('layouts.admin')

@section('content')


    <div class="container">
        <div class="top d-flex align-items-center justify-content-between my-4">
            <h1 class="text-white">Projects List</h1>
            <a class="btn btn-light" href="{{route('admin.projects.create')}}">
                <i class="fa-solid fa-plus fa-beat-fade"></i>
                <span>Add new project</span>
            </a>
        </div>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

             @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td>
                        <a class="btn btn-light" href="{{ route('admin.projects.show' , $project)}}"><i class="fa-solid fa-eye"></i></a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

        {{ $projects->links()}}
    </div>





@endsection
