<!-- resources/views/comics/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Comics Archive</h1>
    <a href="{{ route('comics.create') }}" class="btn btn-primary">Create New Comic</a>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection

