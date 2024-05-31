<!-- resources/views/comics/index.blade.php -->
@extends('layouts.app')

@section('content')
<section class="container">
    <h1>Comics Archive</h1>
    <a href="{{ route('comics.create') }}" class="btn btn-primary">Create New Comic</a>
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col-xl-3 col-xs-12 col-sm-6 col-md-6 col-lg-3 mt-5">
            <h4>{{ $comic->title }}</h4>
            <img class="w-50 mt-4" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            <p class="small">Series: {{ $comic->series }}</p>
            
            <p class="text-uppercase fw-bold">Description:</p>
            <p>{{ $comic->description }}</p>

            <p class="small">Price: ${{ $comic->price }}</p>

            <p>Sale Date: {{ $comic->sale_date }}</p>
            
            <p class="text-uppercase fw-bold">Type: {{ $comic->type }}</p>

            <div class="mt-5">
                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning w-25">Edit</a>

                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger w-25">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>


</section>

@endsection