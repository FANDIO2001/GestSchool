<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Classe_Student;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
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
           $classes = Classe::with('speciality')->get();
        return \view('pages.student.create',\compact('classes'));
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
            'fathersName' => 'required',
            'mothersName' => 'required',
            'phone_number' => 'required',
            'phone' => 'required',
            'classe_id' => 'required|exists:classes,id',
    
        ]);
      //   dd($request);
        DB::transaction(function () use ($request) {
            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'address' => $request->address,
                'password' => bcrypt($request->password),
                'phone' => $request->phone,
                'rule' => 'eleve',
                'slug' => Str::slug($request->firstname . '-' . \uniqid()),
            ]);

            $student = Student::create([
                'user_id' => $user->id,
                'fathersName' => $request->fathersName,
                'mothersName' => $request->mothersName,
                'stus' => 'regulier',
                'phone_number' => $request->phone_number,
            ]);

            Classe_Student::create([
                'student_id' => $student->id,
                'classe_id' => $request->classe_id,
                'annee' => $request->annee,
            ]);
        });

        return redirect()->back()->with('success', 'Élève créé avec succès.');
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
