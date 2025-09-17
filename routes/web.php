<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue à GestSchool</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
<body class="bg-gray-100 font-sans">

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

    <header class="bg-white shadow-md py-20">
        <div class="container mx-auto text-center px-6">
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
    </header>

    <section class="py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800">Nos fonctionnalités clés</h2>
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 text-center">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Gestion des cours</h3>
                    <p class="mt-2 text-gray-600">Planifiez et suivez les cours facilement.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 text-center">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Profils élèves</h3>
                    <p class="mt-2 text-gray-600">Accédez aux informations et notes des élèves.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 text-center">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Calendrier</h3>
                    <p class="mt-2 text-gray-600">Ne manquez aucun événement important.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto text-center px-6">
            <p>&copy; 2024 GestSchool. Tous droits réservés.</p>
        </div>
    </footer>

</body>
</html>