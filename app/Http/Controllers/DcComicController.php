<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Models\DcComic;
use Illuminate\Http\Request;

class DcComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comicArray = DcComic::all();
        return view('dc_comics.index', compact('comicArray'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dc_comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {
        // per un lavoro più organizzato spostiamo le regole nel file StoreComicRequest creato tramite comando php artisan make:request StoreComicRequest
        // $request->validate(
        //     [
        //         'title' => ['required', 'min:5'],
        //         'type'=> ['required'],
        //         'series' => ['required'],
        //         'sale_date' => ['required'],
        //         'price' => ['required'],
        //         'description' => ['required'],
        //     ],
        //     [
        //         'title.required'=> 'Il campo titolo non può essere vuoto',
        //         'type'=>'Selezionare il tipo di fumetto',
        //         'series.required'=>'Il campo serie non può essere vuoto',
        //         'price.required'=> 'Il campo prezzo non può essere vuoto',
        // ]);
        $data = $request->all();
        $comic = new DcComic();
        $comic->fill($data);
        $comic->save();
        return redirect()->route('dc-comics.show', ['dc_comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     * la variabile dcComic riprende il nome della route ma senza trattino
     */
    public function show(DcComic $dcComic)
    {
        return view('dc_comics.show', compact('dcComic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DcComic $dcComic)
    {
        return view('dc_comics.edit', compact('dcComic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DcComic $dcComic)
    {
        $data = $request->all();
        $dcComic->update($data);
        return redirect()->route('dc-comics.show', ['dc_comic' => $dcComic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DcComic $dcComic)
    {
        $dcComic->delete();
        return redirect()->route('dc-comics.index', ['dc_comic' => $dcComic->id]);
    }
}
