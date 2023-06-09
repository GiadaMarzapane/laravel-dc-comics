<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// importo Model
use App\Models\Comic;


class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // function per validazione dati inseriti nel form
    private function dataValidation(Request $request){
        $request->validate([
            'title' => 'required|min:1|max:255',
            'series' => 'required|min:1|max:255',
            'price' => 'required|numeric'
        ]);
    }

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
        // richiamo function per validazione
        $this->dataValidation($request);

        // se ok validazione mi prendo tutti i dati
        $data=$request->all();

        // creo nuova istanza e nuovo fumetto
        $newComic = new Comic;
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];

        // salvo i miei dati
        $newComic->save();

        // redirect alla pagina pricipale con elenco comics
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic'));
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

        return view('comics.edit', compact('comic'));
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
        // richiamo function per validazione
        $this->dataValidation($request);
        
        $data = $request->all();

        $comic = Comic::findOrFail($id);

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];

        $comic->save();

        return redirect()->route('comics.index');
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
