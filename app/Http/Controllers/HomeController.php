<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        // $trajets = Trajet::paginate(4);
        $query = Trajet::paginate(4);
        $query = Trajet::query();

        if (isset($request->lieuDepart) && ($request->lieuDepart != null)) {
            $query->where('lieuDepart', $request->lieuDepart);
        }

        if (isset($request->lieuArrive) && ($request->lieuArrive != null)) {
            $query->where('lieuArrive', $request->lieuArrive);
        }

        if (isset($request->heurDepart) && ($request->heurDepart != null)) {
            $query->where('heurDepart', $request->heurDepart);
        }

        if (isset($request->dateDepart) && ($request->dateDepart != null)) {
            $query->where('dateDepart', $request->dateDepart);
        }

        if (isset($request->tarif) && ($request->tarif != null)) {
            $query->where('tarif', $request->tarif);
        }

        if (isset($request->nombrePlace) && ($request->nombrePlace != null)) {
            $query->where('nombrePlace', $request->nombrePlace);
        }

        $trajets = $query->get();

        return view('utilisateurs.index',compact('trajets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Trajet $trajet)
    {
        return view('utilisateurs.show', ['trajet' => $trajet]);
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
