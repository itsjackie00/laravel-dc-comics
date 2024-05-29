<!-- resources/views/comics/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->description }}</p>
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    <p>Price: ${{ $comic->price }}</p>
    <p>Series: {{ $comic->series }}</p>
    <p>Sale Date: {{ $comic->sale_date }}</p>
    <p>Type: {{ $comic->type }}</p>
    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('comics.index') }}" class="btn btn-secondary">Back to List</a>
@endsection

