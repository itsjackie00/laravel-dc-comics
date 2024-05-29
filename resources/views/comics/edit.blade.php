<!-- resources/views/comics/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Comic</h1>
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Title</label>
            <input type="text" name="title" value="{{ old('title', $comic->title) }}" required>
        </div>
        <div>
            <label>Description</label>
            <textarea name="description" required>{{ old('description', $comic->description) }}</textarea>
        </div>
        <div>
            <label>Thumb</label>
            <input type="text" name="thumb" value="{{ old('thumb', $comic->thumb) }}" required>
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" value="{{ old('price', $comic->price) }}" required>
        </div>
        <div>
            <label>Series</label>
            <input type="text" name="series" value="{{ old('series', $comic->series) }}" required>
        </div>
        <div>
            <label>Sale Date</label>
            <input type="date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}" required>
        </div>
        <div>
            <label>Type</label>
            <input type="text" name="type" value="{{ old('type', $comic->type) }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
    </form>
    <a href="{{ route('comics.index') }}" class="btn btn-secondary">Back to List</a>
@endsection

