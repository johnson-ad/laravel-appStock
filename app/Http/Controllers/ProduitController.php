<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function produit()
    {
        $produit = Produit::all();
        return view('produit', [
            'produit' => $produit
        ]);
    }

    public function create()
    {
        return view('createProduit');
    }

    public function store(Request $request)
    {
        // dd($request);
        $produit = new Produit();
        $produit->libelle = $request->libelle;
        $produit->stock = $request->stock;
        $produit->save();
        return redirect('/produit');
    }
}
