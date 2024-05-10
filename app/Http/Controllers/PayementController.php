<?php

namespace App\Http\Controllers;

use App\Models\Payement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
// use App\Models\Trajet;

class PayementController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(Payement $payement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payement $payement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payement $payement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payement $payement)
    {
        //
    }

   

    // public function tymoneyflooz($tarif, $trajet)
    public function tefo($tarif, $trajet)
    {
        // URL de l'API distante
        $url = 'https://paygateglobal.com/v1/page';

        // Générer un identifiant unique
        $identifier = Str::random(64);

        // Paramètres à envoyer avec la requête GET
        $params = [
            'token' => '3ac1031f-e535-4776-a2ca-7e504ef6d5e1',
            'amount' => $tarif,
            'identifier' => $identifier,
            'url' => route('dashboard', ["tarif" => $tarif, "trajet" => $trajet]),
        ];

        // Requête GET avec les paramètres
        $response = Http::get($url, $params);

        // Construire le lien de redirection
        $redirectUrl = $url . "?" . http_build_query($params);

        return redirect($redirectUrl);
    }

}
