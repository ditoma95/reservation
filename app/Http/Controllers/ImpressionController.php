<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpressionRequest;
use App\Http\Requests\UpdateImpressionRequest;
use App\Models\Impression;
use Illuminate\Http\Request;
class ImpressionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $impressions = Impression::all();
        return view('templates.impression.index', ['impressions' => $impressions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('templates.impression.create');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'avisService' => 'required|string',
            'commentaire' => 'required|string',
            'dateAvis' => 'required|string',
        ]);

        $impression = new Impression();
        $impression->avisService = $request->avisService;
        $impression->commentaire = $request->commentaire;
        $impression->dateAvis = $request->dateAvis;
        $impression->save();

        //dump($voiture);

        return redirect()->route('impressions.index')->with('success', 'impression ajouté avec succès');


    }

    /**
     * Display the specified resource.
     */
    public function show(Impression $impression)
    {
        //
        return view('templates.impression.show', ['impression' => $impression]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Impression $impression)
    {
        //

        return view('templates.impression.edit', ['impression' => $impression]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Impression $impression)
    {
        //
        $data =$request->validate([
            'avisService' => 'required|string',
            'commentaire' => 'required|string',
            'dateAvis' => 'required|string',
        ]);

        $impression->update($data);


        return redirect()->route('impressions.index')->with('success', 'impresion modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Impression $impression)
    {
        //
        $impression->delete();
        return redirect()->route('impressions.index')->with('success', 'impresion supprimé avec succès');
    }
}