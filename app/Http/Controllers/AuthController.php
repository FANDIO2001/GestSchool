<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Affiche le formulaire de connexion
     */
    public function showLoginForm()
    {
       return view('auth.login');
    }


    public function showRegistrationForm()
{
    // Affiche la vue d'inscription qui se trouve dans resources/views/auth/register.blade.php
    return view('auth.register');
}

    /**
     * Traite la tentative de connexion
     */
    public function login(Request $request)
    {
        // Valide les champs du formulaire
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Vérifie les identifiants
        if (Auth::attempt($credentials)) {
            // Régénère la session pour éviter les attaques de fixation de session
            $request->session()->regenerate();

            // Redirige vers la page prévue après connexion
            return redirect()->intended('/dashboard');
        }

        // Si échec, retourne au formulaire avec un message d’erreur
        return back()->withErrors([
            'email' => 'Email ou mot de passe incorrect',
        ])->onlyInput('email');
    }

    /**
     * Déconnecte l’utilisateur
     */
    public function logout(Request $request)
    {
        // Déconnecte l’utilisateur
        Auth::logout();

        // Invalide la session actuelle
        $request->session()->invalidate();

        // Régénère le token CSRF
        $request->session()->regenerateToken();

        // Redirige vers la page d’accueil
        return redirect('/');
    }
}