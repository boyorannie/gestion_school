<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Nop;
use App\Models\Eleve;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function AjoutNote()
    {
        
        $eleves = Eleve::all();
        
       return view('gestion-note.ajoutNote', compact('eleves'));
    }



    public function AjouterNote(Request $request)
{
    $validator = Validator::make($request->all(), [
        'matiere' => 'required',
        'note' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $data = new Note;
    $data->matiere = $request->matiere;
    $data->note_obtenu = $request->note;  
    $data->eleve_id=$request->eleve;
   
    $data->save();

    return redirect()->back()->with('success', 'Note ajoutée avec succès.');
}


    public function VoirNote()

    {
        $eleves = Eleve::all();
        $notes = Note::all();
        return view('gestion-note.voirNote',compact('notes','eleves'));
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
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
    }
}
