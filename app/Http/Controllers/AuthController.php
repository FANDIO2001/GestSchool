<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Affiche le formulaire de connexion
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Traite la tentative de connexion
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            // Vérifie si l'utilisateur est un enseignant
            if ($user->role === 'enseignant') {
                $enseignant = $user->enseignant;

                if (! $enseignant) {
                    Auth::logout();
                    return back()->withErrors([
                        'email' => "Aucune fiche d'enseignant associée à ce compte.",
                    ]);
                }

                $aujourdhui = now()->dayOfWeekIso; // lundi = 1, dimanche = 7

                // Vérifie s'il a au moins une plage horaire pour aujourd'hui
                $aCoursAujourdHui = $enseignant->plagesHoraires()
                    ->where('jour_id', $aujourdhui)
                    ->exists();

                if (! $aCoursAujourdHui) {
                    Auth::logout();
                    return back()->withErrors([
                        'email' => "Impossible de vous connecter. Vous n'avez aucun cours programmé pour cette journée.",
                    ]);
                }
            }

            // Redirection vers le dashboard si tout est ok
            return redirect()->intended('/dashboard')->with('connect', 'Bienvenue M/Mme ' . Auth::user()->firstname);
        }

        return back()->withErrors([
            'email' => 'Identifiants incorrects.',
        ]);
    }

    /**
     * Déconnecte l’utilisateur
     */
      public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
