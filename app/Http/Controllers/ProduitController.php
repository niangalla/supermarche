<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::all();
        return view('produit.index', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produit.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nomprod' => 'required|unique:produits,nom',
            'prixprod' => 'required|min:1',
            'qtprod' => 'required',
            'codeprod' => 'required|unique:produits,code',
        ]);

        Produit::create([
            'nom' => $request->nomprod,
            'prix' => $request->prixprod,
            'quantiteEnStock' => $request->qtprod,
            'code' => $request->codeprod,
            'couleur' => $request->couleurprod,
            'etat' => $request->etat
        ]);
        return redirect(route('produit.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        return view('produit.show', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        return view('produit.edit', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit)
    {
        $produit->update([
            'nom' => $request->nomprod,
            'prix' => $request->prixprod,
            'quantiteEnStock' => $request->qtprod,
            'code' => $request->codeprod,
            'couleur' => $request->couleurprod,
            'etat' => $request->etat
        ]);
        return redirect()->route('produit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->route('produit.index');
    }
}
