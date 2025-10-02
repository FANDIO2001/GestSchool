<?php

namespace App\Http\Controllers;

use App\Models\Cours_Session;
use App\Models\Classe_Student;
use App\Models\Classe;
use App\Models\Cours;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Session_Student;
use Illuminate\Support\Facades\Auth;

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
        $matiereId = $request->input('cour_id');
        
        // Vérifie que les deux valeurs sont bien présentes
        abort_if(!$classeId || !$matiereId, 400, 'Classe ou matière manquante');

        // Chargement des données associées
        $classe = Classe::with('speciality')->findOrFail($classeId);
        $matiere = Cours::findOrFail($matiereId);

        $eleves = Classe_Student::with('student')
            ->where('classe_id', $classeId)
            ->get()
            ->pluck('student');
        $matieres = Cours::all();
        
        return view('pages.sessions.create', compact('classe', 'eleves', 'matiere', 'matieres'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $enseignant = Teacher::where('user_id', Auth::id())->first();

        $request->validate([
            'heure_debut'     => 'required|date_format:H:i',
            'heure_fin'      => 'required|date_format:H:i|after:bebut',
            'insident'  => 'nullable|string',
            'classe_id' => 'required|exists:classes,id',
            'matiere_id' => 'required|exists:matieres,id',
        ]);

        $session = Cours_Session::create([
            'classe_id'     => $request->input('classe_id'),
            'cours_id'    => $request->input('matiere_id'),
            'heure_debut'   => $request->input('heure_debut'),
            'heure_fin'     => $request->input('heure_fin'),
            'synthese'       => $request->input('synthese'),
            'insident'      => $request->input('insident'),
            'enseignant_id' => $enseignant->id, // ajuster si relation différente
        ]);

        $presents = $request->input('presents', []); // élèves cochés comme présents
        $elevesIds = $request->input('eleves_id', []); // tous les élèves transmis (même non cochés)
        $tousEleves = Student::whereIn('id', $elevesIds)->get(); // récupération depuis la base

        foreach ($tousEleves as $student) {
            Session_Student::create([
                'session_id' => $session->id,
                'student_id'  => $student->id,
                'present'   => in_array($student->id, $presents), // true si coché, false sinon
            ]);
        }


        // 🚀 Redirection avec confirmation
        return redirect()->route('seances.index')->with('success', 'Séance enregistrée avec succès.');
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
