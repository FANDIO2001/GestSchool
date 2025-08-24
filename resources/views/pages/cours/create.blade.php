@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <div class="w-full max-w-2xl bg-white p-8 rounded-xl shadow-lg border border-gray-200 mx-auto">
            <h2 class="text-3xl font-extrabold text-center mb-6 text-gray-800">Créer un nouveau Cours</h2>

            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                    <p class="font-bold">Erreur(s) de validation :</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('cours.store') }}">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">Nom du Cours</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        value="{{ old('name') }}"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Ex: Mathématiques" 
                        required autofocus>
                </div>

                <div class="mb-6">
                    <label for="description" class="block text-gray-700 text-sm font-semibold mb-2">Description</label>
                    <textarea 
                        id="description" 
                        name="description" 
                        rows="4" 
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Ex: Cours d'introduction aux mathématiques pour le niveau 6e.">{{ old('description') }}</textarea>
                </div>

                <button 
                    type="submit" 
                    class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                    Créer le Cours
                </button>
            </form>
        </div>
    </div>
@endsection