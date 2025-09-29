<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Responsible;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ReponsibleController extends Controller
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
        return view('pages.responsibles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
            $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'address' => 'required',
            'password' => 'required|confirmed|min:6',
            'phone' => 'required',
            'responsability' => 'required',
        ]);
        // dd($request);
        DB::transaction(function () use ($request) {
            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'address' => $request->address,
                'password' => bcrypt($request->password),
                'phone' => $request->phone,
                'rule' => 'responsable',
                'slug' => Str::slug($request->firstname . '-' . \uniqid()),
            ]);

            Responsible::create([
                'user_id' => $user->id,
                'responsability' => $request->responsability,

            ]);
        });

        return redirect()->back()->with('success', 'Responsable créé avec succès.');
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
