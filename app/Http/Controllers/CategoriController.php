<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use App\Models\Produit;
use Illuminate\Http\Request;

class CategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categori  $categori
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $produits = Produit::all()->where('category_id', $id);
        $categoris = Categori::all();
        $category = Categori::find($id);
        return view("singelcateg")->with("data",[$produits, $categoris, $category]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categori  $categori
     * @return \Illuminate\Http\Response
     */
    public function edit(Categori $categori)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categori  $categori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categori $categori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categori  $categori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categori $categori)
    {
        //
    }
}
