<!-- resources/views/comics/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create New Comic</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div>
            <label>Title</label>
            <input type="text" name="title" value="{{ old('title') }}" required>
        </div>
        <div>
            <label>Description</label>
            <textarea name="description" required>{{ old('description') }}</textarea>
        </div>
        <div>
            <label>Thumb</label>
            <input type="text" name="thumb" value="{{ old('thumb') }}" required>
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" value="{{ old('price') }}" required>
        </div>
        <div>
            <label>Series</label>
            <input type="text" name="series" value="{{ old('series') }}" required>
        </div>
        <div>
            <label>Sale Date</label>
            <input type="date" name="sale_date" value="{{ old('sale_date') }}" required>
        </div>
        <div>
            <label>Type</label>
            <input type="text" name="type" value="{{ old('type') }}" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
    <a href="{{ route('comics.index') }}" class="btn btn-secondary">Back to List</a>
@endsection

