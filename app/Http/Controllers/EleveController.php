<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function AjouterEleve(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'Obligatoire',
            'prenom' => 'Obligatoire',
            'date' => 'Obligatoire|date',
            'classe' => 'Obligatoire',
            'sexe' => 'Obligatoire',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $data = new Eleve;
        $data->nom = $request->nom;
        $data->prenom = $request->prenom;
        $data->date_naissance = $request->date;
        $data->classe = $request->classe;
        $data->sexe = $request->sexe;
        
        $data->save();
    
        return redirect()->back()->with('success', 'Élève ajouté avec succès.');
    }
    
    
    public function Voir_List()
    {
        return view('gestion-eleve.listeEleve');
    }
    public function Modifier()
    {
        return view('gestion-eleve.modifier');
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
    public function show(Eleve $eleve)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Eleve $eleve)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Eleve $eleve)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eleve $eleve)
    {
        //
    }
}
