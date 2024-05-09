<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVoitureRequest;
use App\Http\Requests\UpdateVoitureRequest;
use Illuminate\Http\Request;
use App\Models\Voiture;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $voitures = Voiture::all();
        return view('templates.voiture.index', ['voitures' => $voitures]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('templates.voiture.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'immatriculation' => 'required|string|min:2',
            'nombrePlace' => 'required|numeric',
            'voiture_image' => 'required',
        ]);

        $voitureImagePath = $request->file('voiture_image')->store('public/images');
        $path_str = explode('/', $voitureImagePath);
        // dd($path_str);
        $path_str = array_slice($path_str, 1, count($path_str));
        $path = implode('/', $path_str);
        // $path = implode('/', array_slice($path_str, 2));





        $voiture = new Voiture();
        $voiture->immatriculation = $request->immatriculation;
        $voiture->nombrePlace = $request->nombrePlace;
        $voiture->voiture_image = $path;
        $voiture->save();

        //dump($voiture);

        return redirect()->route('voitures.index')->with('success', 'Trajet ajouté avec succès');

    }

    /**
     * Display the specified resource.
     */
    public function show(Voiture $voiture)
    {
        //
        return view('templates.voiture.edit', ['voiture' => $voiture]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voiture $voiture)
    {
        //
        return view('templates.voiture.edit', ['voiture' => $voiture]);
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdateVoitureRequest $request, Voiture $voiture)
    public function update(Request $request, Voiture $voiture)

    {
        //
        $data = $request->validate([
            'immatriculation' => 'required|string|min:2',
            'nombrePlace' => 'required|numeric',
            'voiture_image' => 'required',
        ]);

        // if ($request->hasFile('voiture_image')) {
        //     $voitureImagePath = $request->file('voiture_image')->store('public/permis');
        // } else {
        //     $voitureImagePath = null;
        // }

        // $trajet->user_id = auth()->id();
        // $voiture = new Voiture();
        // $voiture->immatriculation = $request->immatriculation;
        // $voiture->nombrePlace = $request->nombrePlace;
        // $voiture->voiture_image = $voitureImagePath;
        // $voiture->save();

        //dump($voiture);

        $voiture->update($data);


        return redirect()->route('voitures.index')->with('success', 'Trajet ajouté avec succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voiture $voiture)
    {
        //
        $voiture->delete();
        return redirect()->route('voitures.index')->with('success', 'Trajet delete avec succès');

    }
}
