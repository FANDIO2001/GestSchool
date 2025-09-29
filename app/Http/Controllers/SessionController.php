<?php

namespace App\Http\Controllers;

use App\Models\Cours_Session;
use App\Models\Classe_Student;
use App\Models\Classe;
use App\Models\Cours;
use Illuminate\Http\Request;

class SessionController extends Controller
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
    public function create(Request $request)
    {
        $classeId = $request->input('classe_id');
        $matiereId = $request->input('matiere_id');
        // Chargement des données associées
        $classe = Classe::with('speciality')->findOrFail($classeId);
        $matiere = Cours::findOrFail($matiereId);

        // Vérifie que les deux valeurs sont bien présentes
        abort_if(!$classeId || !$matiereId, 400, 'Classe ou matière manquante');


        if ($classeId) {
            $classes = Classe::with('speciality')->findOrFail($classeId);
        }
        $eleves = Classe_Student::with('eleve')
            ->where('classe_id', $classeId)
            ->get()
            ->pluck('eleve');
        $matieres = Cours::all();
        return view('pages.sessions.create', compact('classes', 'eleves', 'matiere', 'matieres'));

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
    public function show(string $id)
    {
        //
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
