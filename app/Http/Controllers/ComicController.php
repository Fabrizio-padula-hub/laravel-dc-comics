<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

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

        $data = [
            'comics' => $comics
        ];
        
        return view('comics.index', $data);

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
        $validated = $request->validate(
            [
                'title' => 'required|min:10|max:255',
                'description' => 'required|min:5|max:2000',
                'thumb' => 'required|url:http,https',
                'price' => 'required|decimal:2',
                'series' => 'required|min:5|max:90',
                'type' => 'required',
                'sale_date' => 'required'
            ],
            [
                'title' => 'Parametro richiesto, il titolo deve avere min 5 caratteri e max 255 caratteri',
                'description' => 'Parametro richiesto',
                'thumb' => 'l\'immagine deve essere un ULR',
                'price' => 'Parametro richiesto, deve essere un numero',
                'series' => 'Parametro richiesto',
                'type' => 'Parametro richiesto',
                'sale_date' => 'Parametro richiesto'
            ],
        );

        $formData = $request->all();
        
        $newComic = new Comic();

        $newComic->fill($formData);
        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);

        $data = [
            'comic' => $comic
        ];
       
        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        $data = [
            'comic' => $comic
        ];

        return view('comics.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comic = Comic::findOrFail($id);
        $formData = $request->all();
       
        $comic->update($formData);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }
}
