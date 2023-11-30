@extends('layouts.admin')


@section('content')

<div class="container py-5">
    <form action="{{ $route }}" method="POST" class="text-white">
        @csrf
        @method($method)
        <h2>{{ $title }}</h2>


            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="release_date" class="form-label">release date: </label>
                <input type="text" class="form-control" id="release_date" name="release_date" aria-describedby="emailHelp">
            </div>


        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-warning">Reset</button>
      </form>

</div>




@endsection
