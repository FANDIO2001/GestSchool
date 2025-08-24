<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-50 flex items-center justify-center min-h-screen">
    
    <div class="w-full max-w-lg bg-white p-8 rounded-xl shadow-lg border border-gray-200">

        <h2 class="text-3xl font-extrabold text-center mb-6 text-gray-800">GESTSHOOL</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            @if ($errors->any())
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                    <p class="font-bold">Oups ! Une erreur est survenue.</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">Nom</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="firstname" class="block text-gray-700 text-sm font-semibold mb-2">Prénom</label>
                    <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Adresse Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-gray-700 text-sm font-semibold mb-2">Téléphone</label>
                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="role" class="block text-gray-700 text-sm font-semibold mb-2">Rôle</label>
                <select id="role" name="role" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option value="">Sélectionnez un rôle</option>
                    <option value="proviseur">Proviseur</option>
                    <option value="enseignant">Enseignant</option>
                    <option value="eleve">Élève</option>
                    </select>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Mot de passe</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-700 text-sm font-semibold mb-2">Confirmer le mot de passe</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                S'inscrire
            </button>
        </form>

        <div class="text-center mt-6">
            <p class="text-gray-600">
                Déjà un compte ? 
                <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700 font-bold">Se connecter</a>
            </p>
        </div>

    </div>

</body>
</html>