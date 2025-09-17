<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue à GestSchool</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto p-4">
        <header class="text-center py-5">
            <h1 class="text-5xl font-bold text-gray-800">Gestion d'établissement scolaire</h1>
            <p class="mt-3 text-lg text-gray-600">Simplifiez l'administration, optimisez l'apprentissage.</p>
        </header>

        <main class="mt-10">
            <div class="grid md:grid-cols-2 gap-8">
                <a href="{{ route('teachers.index') }}" class="block p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <h2 class="text-2xl font-semibold text-blue-600">Gestion des Enseignants</h2>
                    <p class="mt-2 text-gray-600">Ajoutez, modifiez ou consultez la liste des enseignants.</p>
                </a>

                <a href="{{ route('students.index') }}" class="block p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <h2 class="text-2xl font-semibold text-green-600">Gestion des Élèves</h2>
                    <p class="mt-2 text-gray-600">Gérez les informations des élèves, leurs notes et leurs absences.</p>
                </a>
            </div>

            </main>
        
        <footer class="text-center text-gray-500 mt-10">
            <p>&copy; 2024 GestSchool. Tous droits réservés.</p>
        </footer>
    </div>

</body>
</html>