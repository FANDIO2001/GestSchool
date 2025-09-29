<?php

namespace App\Http\Controllers;

use App\Models\Cours; // ✅ Consistent model name
use Illuminate\Http\Request;


class CoursController extends Controller
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
          return view('pages.cours.create');

    }
    /** Store a newly created course in storage.
     */
    public function store(Request $request) {
             $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Cours::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->back()->with('success', 'Cour ajouté avec succès!');
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
    public function update(Request $request, Cours $cours) {}

    /**
     * Remove the specified course from storage.
     */
    public function destroy(Cours $cours) {}
}
