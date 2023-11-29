@extends('layouts.admin')

@section('content')


<div class="container">

    <h1 class="py-5">Project Details</h1>


        <div class="card mb-5" style="width: 35rem;">

            <div class="card">
                {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                <div class="card-body">
                <h5 class="card-title">{{ $project->title}}</h5>
                <p class="card-text"><span>Release date: </span>{{ $project->release_date }}</p>
                <p class="card-text">{{ $project->description }}</p>

                </div>
            </div>

        </div>
        <a class="btn btn-primary" href="{{ route('admin.projects.index')}}">Go back to projects list</a>

</div>


@endsection
