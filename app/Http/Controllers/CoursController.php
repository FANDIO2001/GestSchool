<?php

namespace App\Http\Controllers;

use App\Models\Cours; // ✅ Consistent model name
use Illuminate\Http\Request;

class CoursController extends Controller // ✅ Consistent controller name
{
    /**
     * Display a listing of the courses.
     */
    public function index()
    {
        $cours = Cours::all();
        return view('pages.cours.index', compact('cours'));
    }
    
    /**
     * Show the form for creating a new course.
     */
    public function create()
    {
        return view('pages.cours.create');
    }

    /**
     * Store a newly created course in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Cours::create($request->all());
        
        return redirect()->route('cours.index')->with('success', 'Le cours a été créé avec succès !');
    }

    /**
     * Display the specified cours.
     */
    public function show(Cours $cours)
    {
        return view('pages.cours.show', compact('cours'));
    }

    /**
     * Show the form for editing the specified course.
     */
    public function edit(Cours $cours)
    {
        return view('pages.cours.edit', compact('cours'));
    }

    /**
     * Update the specified course in storage.
     */
    public function update(Request $request, Cours $cours)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        
        $cours->update($request->all());

        return redirect()->route('cours.index')->with('success', 'Le cours a été mis à jour avec succès !');
    }

    /**
     * Remove the specified course from storage.
     */
    public function destroy(Cours $cours)
    {
        $cour->delete();
        
        return redirect()->route('cours.index')->with('success', 'Le cours a été supprimé avec succès !');
    }
}