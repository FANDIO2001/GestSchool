<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de l'école</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .sidebar {
            width: 250px;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans antialiased">
    
    @include('layouts.components.navbar')

    <div class="flex h-screen bg-gray-200">
        @include('layouts.components.sidebar')

        <div class="flex-1 p-10 overflow-auto">
            @yield('content')
        </div>
    </div>
</body>
</html>