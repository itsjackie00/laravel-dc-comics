<!-- resources/views/comics/index.blade.php -->
@extends('layouts.app')

@section('content')
<h1>Comics Archive</h1>
<a href="{{ route('comics.create') }}" class="btn btn-primary">Create New Comic</a>
<ul class="list-group m-3 list-unstyled">
    @foreach ($comics as $comic)
    <li>{{ $comic->title }}</li>
    <br>
    <li>{{ $comic->description }}</li>
    <li>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </li>
    <li>{{ $comic->price }}</li>
    <li>{{ $comic->series }}</li>
    <li>{{ $comic->sale_date }}</li>
    <li>{{ $comic->type }}</li>
    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning w-25">Edit</a>

    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger w-25">Delete</button>
    </form>
    
    @endforeach
    <hr>
    <br>
</ul>
@endsection

