<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $departments = Department::all();
        return \view('pages.departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        return \view('pages.departments.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Department::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return \redirect()->back()->with('succes', 'Departement ajoute avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $department = Department::find($id);
        return \view('pages.departments.show', \compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $department = Department::find($id);
        // \dd($department);
        return \view('pages.departments.edit', \compact('department'));
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
    public function destroy($id)
    {
        $departments = Department::find($id);
        $departments->delete();
        return \redirect()->back()->with('success', 'Departement supprime avec succes');
       
    }
}
