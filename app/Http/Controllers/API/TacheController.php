<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taches = Tache::all();
        return response()->json($taches);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tache = $request->all();
        $libelle = $tache['libelle'];
        $jour = $tache['jour'];
        $mois = $tache['mois'];
        $annee = $tache['annee'];
        $heure = $tache['heure'];
        $date_heure = $jour . '/' . $mois . '/' . $annee . ' ' . $heure;
        Tache::create([
            'libelle' => $libelle,
            'date_heure' => $date_heure,
            'statut' => 'en attente'
        ]);
        return response()->json(['message' => 'Tâche créée avec succès']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
