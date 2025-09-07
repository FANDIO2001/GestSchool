<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une Classe</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    
    <div class="w-full max-w-xl bg-white p-8 rounded-xl shadow-lg border border-gray-200">

        <h2 class="text-3xl font-extrabold text-center mb-6 text-gray-800">Modifier la Classe</h2>

        <form method="POST" action="">
            @csrf
            @method('PUT') 

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
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    value="{{ old('name', $classe->name) }}"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required autofocus>
            </div>
            l

            <div class="mb-4">
                <label for="level" class="block text-gray-700 text-sm font-semibold mb-2">Niveau</label>
                <select 
                    id="level" 
                    name="level" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
                    <option value="">Sélectionnez un niveau</option>
                    <option value="6e" {{ old('level', $classe->level) == '6e' ? 'selected' : '' }}>6ème</option>
                    <option value="5e" {{ old('level', $classe->level) == '5e' ? 'selected' : '' }}>5ème</option>
                    <option value="4e" {{ old('level', $classe->level) == '4e' ? 'selected' : '' }}>4ème</option>
                    <option value="3e" {{ old('level', $classe->level) == '3e' ? 'selected' : '' }}>3ème</option>
                    <option value="2nde" {{ old('level', $classe->level) == '2nde' ? 'selected' : '' }}>2nde</option>
                    <option value="1ère" {{ old('level', $classe->level) == '1ère' ? 'selected' : '' }}>1ère</option>
                    <option value="Terminale" {{ old('level', $classe->level) == 'Terminale' ? 'selected' : '' }}>Terminale</option>
                </select>
            </div>

            <button 
                type="submit" 
                class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                Mettre à jour la Classe
            </button>
        </form>
    </div>
</body>
</html>