@extends('layouts.app')

@section('content')
    <div class="bg-gray-100 m-5 mb-0 p-5 shadow-lg ">

        <h2 class="text-3xl font-extrabold text-center mb-6 text-gray-800">Créer une nouvelle Classe</h2>

        <form method="POST" action=" ">
            @csrf

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

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">Nom de la Classe</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Ex: 6e A" required autofocus>
            </div>

            <div class="mb-4">
                <label for="level" class="block text-gray-700 text-sm font-semibold mb-2">Niveau</label>
                <select id="level" name="level"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option value="">Sélectionnez un niveau</option>
                    <option value="6e">6ème</option>
                    <option value="5e">5ème</option>
                    <option value="4e">4ème</option>
                    <option value="3e">3ème</option>
                    <option value="2nde">2nde</option>
                    <option value="1ère">1ère</option>
                    <option value="Terminale">Terminale</option>
                </select>
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                Créer la Classe
            </button>
        </form>
    </div>
@endsection
