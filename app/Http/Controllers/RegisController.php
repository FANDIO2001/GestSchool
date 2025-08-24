<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str; // Importez la classe Str pour générer le slug
use App\Models\User; // Assurez-vous d'importer votre modèle User

class AuthController extends Controller
{
    // ... (méthodes showLoginForm, login, logout) ...

    /**
     * Affiche le formulaire d'inscription
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Traite l'inscription
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role' => 'required|string|in:proviseur,enseignant,eleve', // Valide que le rôle est l'une de ces valeurs
            'phone' => 'nullable|string|max:20', // Le champ est optionnel et de type string
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Génération automatique du slug à partir du nom et prénom
        $slug = Str::slug($request->name . ' ' . $request->firstname);

        // Crée l'utilisateur dans la base de données
        $user = User::create([
            'name' => $request->name,
            'firstname' => $request->firstname,
            'email' => $request->email,
            'role' => $request->role,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'slug' => $slug,
        ]);

        // Connecte l'utilisateur après l'inscription
        Auth::login($user);

        return redirect('/dashboard');
    }
}