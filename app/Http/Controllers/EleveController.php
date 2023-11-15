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
            'nom' => 'required',
            'prenom' => 'required',
            'date' => 'required',
            'classe' => 'required',
            'sexe' => 'required',
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
        // Récupérer tous les élèves depuis la base de données
        $eleves = Eleve::all();
    
        // Passer les élèves à la vue
        return view('gestion-eleve.listeEleve', compact('eleves'));
    }
   // EleveController.php
public function ModifierEleve($id)
{
    // Récupère l'élève à modifier depuis la base de données en utilisant $id
    $eleve = Eleve::find($id);

    // Passe l'élève à la vue
    return view('gestion-eleve.modifier', compact('eleve'));
}

public function EnregistrerModificationEleve(Request $request, $id)
{
    // Récupérer l'élève existant depuis la base de données
    $eleve = Eleve::find($id);

    // Mettre à jour les attributs de l'élève
    $eleve->nom = $request->nom;
    $eleve->prenom = $request->prenom;
    $eleve->date_naissance = $request->date;
    $eleve->classe = $request->classe;
    $eleve->sexe = $request->sexe;

    // Enregistrer les modifications
    $eleve->save();

    // Redirige vers la liste des élèves après la modification
    return redirect()->back()->with('success', 'Élève modifié avec succès.');
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
