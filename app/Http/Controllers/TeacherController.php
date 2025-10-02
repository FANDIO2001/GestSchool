<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Classe;
use App\Models\Day;
use App\Models\Time_Maging;
use App\Models\Department;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::with(['user', 'department', 'timeMagings.day', 'timeMagings.classe.speciality'])->get();
        return \view('pages.teachers.index', \compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $classes = Classe::with('speciality')->get();
        $days = Day::all();
        $departments = Department::all();
        return \view('pages.teachers.create', \compact('days', 'classes', 'departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
        {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'address' => 'required',
            'password' => 'required|confirmed|min:6',
            'phone' => 'required',
            'department_id' => 'required|exists:departments,id',
        ]);

        DB::transaction(function () use ($request) {
            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'address' => $request->address,
                'password' => bcrypt($request->password),
                'phone' => $request->phone,
                'rule' => 'enseignant',
                'slug' => Str::slug($request->firstname . '-' . \uniqid()),
            ]);

            $teachers = Teacher::create([
                'user_id' => $user->id,
                'department_id' => $request->department_id,
                'statut' => 'actif',
            ]);

            foreach ($request->horaires as $day_id => $horaires) {
                foreach ($horaires as $index => $beginning) {
                    if (!empty($beginning) && !empty($request->end[$day_id][$index]) && !empty($request->classes[$day_id][$index])) {
                        Time_Maging::create([
                            'teacher_id' => $teachers->id,
                            'day_id'       => $day_id,
                            'classe_id'     => $request->classes[$day_id][$index],
                            'beginning'   => $beginning,
                            'end'     => $request->end[$day_id][$index],
                        ]);
                    }
                }
            }
        });
        return redirect()->route('teachers.index')->with('success', 'Enseignant enregistré avec succès');
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
        $teachers = Teacher::find($id);
        $teachers->delete();
        return \redirect()->back()->with('success', 'Enseignant supprime avec succes');
    }
}
