<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePassagerRequest;
use App\Http\Requests\UpdatePassagerRequest;
use App\Models\Passager;
use App\Models\User;
use Illuminate\Http\Request;

class PassagerController extends Controller
{
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
    // public function store(StorePassagerRequest $request)
    public function store(User $user, Request $request)
    {

        $userId = $user->id;
        $passager = new Passager();
        $passager->user_id = $userId;
        // $passager->prenom = $request->input('prenom');
        $passager->save();
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(Passager $passager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Passager $passager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePassagerRequest $request, Passager $passager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Passager $passager)
    {
        //
    }
}
