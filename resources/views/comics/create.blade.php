<!-- resources/views/comics/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1 class="m-3 text-primary">Create New Comic</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div>
            <label class="form-label m-3">Title</label>
            <input type="text" name="title" value="{{ old('title') }}" required>
        </div>
        <div>
            <label class="form-label m-3">Description</label>
            <textarea name="description" required>{{ old('description') }}</textarea>
        </div>
        <div>
            <label class="form-label m-3">Thumb</label>
            <input type="text" name="thumb" value="{{ old('thumb') }}" required>
        </div>
        <div>
            <label class="form-label m-3">Price</label>
            <input type="text" name="price" value="{{ old('price') }}" required>
        </div>
        <div>
            <label class="form-label m-3">Series</label>
            <input type="text" name="series" value="{{ old('series') }}" required>
        </div>
        <div>
            <label class="form-label m-3">Sale Date</label>
            <input type="date" name="sale_date" value="{{ old('sale_date') }}" required>
        </div>
        <div>
            <label class="form-label m-3">Type</label>
            <input type="text" name="type" value="{{ old('type') }}" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
    <a href="{{ route('comics.index') }}" class="btn btn-secondary">Back to List</a>
@endsection

