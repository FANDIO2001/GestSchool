@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Vue d'ensemble du projet</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Gestion des classes</h2>
            <p class="text-gray-600 mb-4">Créez, modifiez ou supprimez les classes de votre établissement.</p>
            <a href="{{ route('pages.classes.create') }}" class="inline-block bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                Ajouter une classe
            </a>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Gestion des personnels</h2>
            <p class="text-gray-600 mb-4">Gérez les comptes des proviseurs, enseignants et élèves.</p>
            <a href="#" class="inline-block bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                Voir les personnels
            </a>
        </div>

             <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Gestion des cours</h2>
            <p class="text-gray-600 mb-4">Gérez les cours</p>
            <a href="#" class="inline-block bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                Voir les cours
            </a>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Rapports & analyses</h2>
            <p class="text-gray-600 mb-4">Consultez des rapports sur l'activité et l'utilisation du système.</p>
            <a href="#" class="inline-block bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                Accéder aux rapports
            </a>
        </div>
    </div>
@endsection