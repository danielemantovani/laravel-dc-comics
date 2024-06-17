<?php

namespace App\Http\Controllers;

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DcComic $dcComic)
    {
        return view('dc_comics.show', compact('dcComic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
