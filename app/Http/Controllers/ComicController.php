<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    return view('comics.create');
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $data = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'thumb' => 'required|string|max:255',
        'price' => 'required|numeric',
        'series' => 'required|string|max:255',
        'sale_date' => 'required|date',
        'type' => 'required|string|max:255',
    ]);

    Comic::create($data);
    return redirect()->route('comics.index');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
{
    return view('comics.show', compact('comic'));
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
{
    return view('comics.edit', compact('comic'));
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumb' => 'required|string|max:255',
            'price' => 'required|numeric',
            'series' => 'required|string|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:255',
        ]);
    
        $comic->update($data);
        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
{
    $comic->delete();
    return redirect()->route('comics.index');
}
}
