<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue à GestSchool</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans flex flex-col min-h-screen">

    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-gray-800">
                Gest<span class="text-indigo-600">School</span>
            </a>
            <div class="flex items-center space-x-4">
                <a href="#" class="text-gray-600 hover:text-indigo-600 transition duration-300">Accueil</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600 transition duration-300">Fonctionnalités</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600 transition duration-300">Contact</a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="/login" class="bg-gray-200 text-gray-800 py-2 px-4 rounded-full font-semibold hover:bg-gray-300 transition duration-300">
                    Se connecter
                </a>
                <a href="/register" class="bg-indigo-600 text-white py-2 px-4 rounded-full font-semibold hover:bg-indigo-700 transition duration-300">
                    S'inscrire
                </a>
            </div>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center">
        <div class="text-center px-6 py-20">
            <h1 class="text-5xl font-extrabold text-gray-800 leading-tight">
                Gérez votre établissement scolaire <br> avec simplicité.
            </h1>
            <p class="mt-4 text-xl text-gray-600 max-w-2xl mx-auto">
                GestSchool est la solution complète pour les enseignants, les élèves et les parents.
            </p>
            <div class="mt-8 flex justify-center space-x-4">
                <a href="/register" class="bg-indigo-600 text-white font-bold py-3 px-8 rounded-full text-lg hover:bg-indigo-700 transition duration-300">
                    Commencer gratuitement
                </a>
                <a href="#" class="bg-white border-2 border-indigo-600 text-indigo-600 font-bold py-3 px-8 rounded-full text-lg hover:bg-indigo-50 transition duration-300">
                    En savoir plus
                </a>
            </div>
        </div>
    </main>
    
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto text-center px-6">
            <p>&copy; 2024 GestSchool. Tous droits réservés.</p>
        </footer>
    </div>

</body>
</html>