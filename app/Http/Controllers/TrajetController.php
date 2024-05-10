<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrajetRequest;
use App\Http\Requests\UpdateTrajetRequest;
use App\Models\Conducteur;
use App\Models\Trajet;
use App\Models\User;
use App\Models\Voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrajetController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware(['auth','role:super-admin|admin']);
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trajets = Trajet::all();
        return view('templates.trajet.index', ['trajets' => $trajets]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Voiture $voiture)
    {
        $voitures = Voiture::all();
        return view('templates.trajet.create', ['voitures' => $voitures]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'lieuDepart' => 'required|string|min:2',
            'lieuArrive' => 'required|string|min:2',
            'lieuEscale' => 'required|string|min:2',
            'heurDepart' => 'required|string',
            'dateDepart' => 'required|string',
            'tarif' => 'required',
            'nombrePlaceDisponible' =>'required',
        ]);


        
        $trajet = new Trajet();

        //ajouter conducteur_id
        // $conducteur = Conducteur::where('conducteur_id', Auth::id())->first();
        $conducteur = User::find(Auth::id())->conducteur;
        // dd($conducteur);
        
        $trajet->conducteur_id = $conducteur->id;
        $trajet->voiture_id = $request->voiture_id;
        $trajet->lieuDepart = $request->lieuDepart;
        $trajet->lieuArrive = $request->lieuArrive;
        $trajet->lieuEscale = $request->lieuEscale;
        $trajet->heurDepart = $request->heurDepart;
        $trajet->dateDepart = $request->dateDepart;
        $trajet->tarif = $request->tarif;
        $trajet->nombrePlaceDisponible =$request->nombrePlaceDisponible;
        
        $trajet->save();

        return redirect()->route('trajets.index')->with('success', 'Trajet ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trajet $trajet)
    {
        return view('templates.trajet.show', ['trajet' => $trajet]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trajet $trajet)
    {
        return view('templates.trajet.edit', ['trajet' => $trajet]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trajet $trajet)
    {
        $data = $request->validate([
            'lieuDepart' => 'required|string|min:2',
            'lieuArrive' => 'required|string|min:2',
            'lieuEscale' => 'required|string|min:2',
            'heurDepart' => 'required|string',
            'dateDepart' => 'required|string',
            'tarif' => 'required',
            'nombrePlaceDisponible' =>'required',
        ]);

        $trajet->update($data);
        return redirect()->route('trajets.index')->with('success', 'Trajet modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trajet $trajet, Request $request)
    {
        $trajet->delete();
        return redirect()->route('trajets.index')->with('success', 'Trajet supprimé avec succès');
    }
}
