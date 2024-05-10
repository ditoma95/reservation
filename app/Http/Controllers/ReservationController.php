<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use App\Models\Passager;
use App\Models\Reservation;
use App\Models\Trajet;
use App\Models\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $passager_name = User::find(Auth::id())->name;
        //dd($passager_name);
        $passager_surname = User::find(Auth::id())->surname;
        $reservations = Reservation::all();
        // foreach ($reservations as $reservation){
        //     dump($reservation->passager->user);
        // }
        // dd("arrêt");
        return view('templates.reservation.index', ['reservations' => $reservations, 'passager_name'=>$passager_name, 'passager_surname'=>$passager_surname]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $trajets = Trajet::all();
       
        return view('templates.reservation.create', ['trajets' => $trajets]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'dateDepart' => 'required|string',
            'lieuDepart' => 'required|string|min:2',
            'lieuArrive' => 'required|string|min:2',
            'heurDepart' => 'required|string',
            'nombrePlace' => 'required',
            'trajet_id' => 'required',
            
        ]);

        $trajet = Trajet::findOrFail($request->trajet_id);
        
        if ($trajet->nombrePlaceDisponible >= $request->nombrePlace) {
            // Décrémentez le nombre de places disponibles
            $trajet->nombrePlaceDisponible -= $request->nombrePlace;
            $trajet->save();
        
            $reservation = new Reservation();

            //ajouter passager_id
           
            $passager = User::find(Auth::id())->passager;
            // dd($passager);
            
            $reservation->dateDepart = $request->dateDepart;
            $reservation->lieuDepart = $request->lieuDepart;
            $reservation->lieuArrive = $request->lieuArrive;
            $reservation->heurDepart = $request->heurDepart;
            $reservation->nombrePlace= $request->nombrePlace;
            $reservation->trajet_id= $request->trajet_id;
            $reservation->passager_id= $passager->id;


            $reservation->save();

            return redirect()->route('reservations.index')->with('success', 'reservation ajouté avec succès');
        } else {
            return redirect()->back()->with('error', 'Nombre de places insuffisant');
        }
    }

        
    

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
        $trajets = Trajet::all();
        return view('templates.reservation.show', ['reservation' => $reservation ,'trajets' => $trajets]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
        $trajets = Trajet::all();
        return view('templates.reservation.edit',['reservation' => $reservation,'trajets' => $trajets]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //

        $data =$request->validate([
            'dateDepart' => 'required|string',
            'lieuDepart' => 'required|string|min:2',
            'lieuArrive' => 'required|string|min:2',
            'heurDepart' => 'required|string',
            'nombrePlace' => 'required',
            'trajet_id' => 'required',
        ]);

        $reservation->update($data);


        return redirect()->route('reservations.index')->with('success', 'reservation modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
        $reservation->delete();
        return redirect()->route('reservations.index')->with('success', 'reservation supprimé avec succès');
    }
}