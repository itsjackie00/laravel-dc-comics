<!-- resources/views/comics/create.blade.php -->
@extends('layouts.app')

@section('content')
<section class="container">
    <h1>Create New Comic</h1>
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="m-3">
            <label>Title</label>
            <input type="text" name="title" value="{{ old('title') }}" required>
        </div>
        <div class="m-3">
            <label>Description</label>
            <textarea name="description" cols="30" rows="5" required>{{ old('description') }}</textarea>
        </div>
        <div class="m-3">
            <label>Thumb</label>
            <input type="text" name="thumb" value="{{ old('thumb') }}" required>
        </div>
        <div class="m-3">
            <label>Price</label>
            <input type="text" name="price" value="{{ old('price') }}" required>
        </div>
        <div class="m-3">
            <label>Series</label>
            <input type="text" name="series" value="{{ old('series') }}" required>
        </div>
        <div class="m-3">
            <label>Sale Date</label>
            <input type="date" name="sale_date" value="{{ old('sale_date') }}" required>
        </div>
        <div class="m-3">
            <label>Type</label>
            <input type="text" name="type" value="{{ old('type') }}" required>
        </div>
        <button type="submit" class="btn btn-success m-2">Save</button>
    </form>
    <a href="{{ route('comics.index') }}" class="btn btn-secondary">Back to List</a>
</section>
@endsection