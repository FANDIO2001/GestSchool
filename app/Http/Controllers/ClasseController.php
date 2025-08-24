<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe; 

class ClasseController extends Controller
{
    /**
     * Affiche le formulaire pour créer une nouvelle classe.
     */
    public function create()
    {
        return view('pages.classes.create');
    }

    /**
     * Stocke une nouvelle classe dans la base de données.
     */
    public function store(Request $request)
    {
        // 1. Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|string|max:255',
        ]);

        // 2. Création de la nouvelle classe
        Classe::create([
            'name' => $request->name,
            'level' => $request->level,
        ]);
        
        // 3. Redirection avec un message de succès
        return redirect()->route('pages.classes.create')->with('success', 'La classe a été créée avec succès !');
    }

    /**
     * Affiche le formulaire pour modifier une classe existante.
     */
    public function edit()
    {
        $classe = new Classe([
            'id' => 1,
            'name' => 'Classe de Test',
            'level' => '5e',
        ]);
        // Retourne la vue d'édition et lui passe l'objet $classe trouvé
        return view('pages.classes.edit', compact('classe'));
    }

    /**
     * Met à jour la classe dans la base de données.
     */
      public function update(Request $request, Classe $classe)
    {
        // 1. Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|string|max:255',
        ]);

        // 2. Mise à jour de la classe avec les nouvelles données du formulaire
        $classe->update($request->all());
        
        // 3. Redirection avec un message de succès
        return redirect()->route('pages.classes.create')->with('success', 'La classe a été mise à jour avec succès !');
    }
}