<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourController extends Controller
{
    /**
     * Affiche le formulaire pour créer un nouveau cours.
     */
    public function create()
    {
        return view('pages.cours.create');
    }
    // Fichier : app/Http/Controllers/CourseController.php
    public function index() // ✅ Cette méthode doit exister
    {
        // Votre logique pour afficher la liste des cours
    }


    /**
     * Stocke un nouveau cours dans la base de données.
     */
    public function store(Request $request)
    {
        // 1. Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // 2. Création du nouveau cours
        Cours::create($request->all());
        
        // 3. Redirection avec un message de succès
        return redirect()->route('cours.index')->with('success', 'Le cours a été créé avec succès !');
    }
    
    // ... Les autres méthodes (index, show, edit, etc.)
}