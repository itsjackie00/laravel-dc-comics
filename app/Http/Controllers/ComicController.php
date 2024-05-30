<?php

// app/Http/Controllers/ComicController.php
namespace App\Http\Controllers;

use App\Models\Comic;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(StoreComicRequest $request)
    {
        Comic::create($request->validated());
        return redirect()->route('comics.index');
    }

    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $comic->update($request->validated());
        return redirect()->route('comics.index');
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
