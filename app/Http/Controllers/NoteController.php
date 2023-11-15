<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

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
        return view('gestion-note.ajoutNote');
    }


    public function VoirNote()
    {
        $note = Note::all();    
        return view('gestion-note.voirNote',compact('note'));
    }

    public function ModifierNote($id)
    {
        $note = Note::find($id);
        return view('gestion-note.modifierNote',compact('note'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function EnregistrerMofifNote(Request $request, $id)

    {
        $note = Note::find($id);    
        $note->matiere = $request->matiere;
        $note->note_obtenu = $request->note_obtenu;
        $note->save();
        return redirect()->back()->with('success', 'Note modifié avec succès.');
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
