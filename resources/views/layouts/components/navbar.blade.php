<nav class="bg-gray-800 text-white p-4 shadow-lg flex justify-between items-center">
    <a href="{{ route('dashboard') }}" class="text-xl font-bold hover:text-gray-300">
        GestSchool
    </a>

    <div class="hidden md:flex items-center space-x-4">
        <a href="{{ route('dashboard') }}" class="hover:text-gray-300">Tableau de Bord</a>
        <a href="{{ route('pages.classes.create') }}" class="hover:text-gray-300">Classes</a>
        <a href="{{ route('cours.index') }}" class="block py-2.5 px-4 text-sm font-medium hover:bg-gray-700 transition duration-200 rounded-lg mt-2"> Cours</a>

        <a href="#" class="hover:text-gray-300">Utilisateurs</a>
        <a href="#" class="hover:text-gray-300">Se déconnecter</a>
    </div>

    <div class="md:hidden">
        <button id="menu-toggle" class="text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>
</nav>

<div id="mobile-menu" class="hidden md:hidden bg-gray-700 w-full">
    <a href="{{ route('dashboard') }}" class="block py-2 px-4 hover:bg-gray-600">Tableau de Bord</a>
    <a href="{{ route('pages.classes.create') }}" class="block py-2 px-4 hover:bg-gray-600">Classes</a>
    <a href="{{ route('cours.index') }}" class="block py-2.5 px-4 text-sm font-medium hover:bg-gray-700 transition duration-200 rounded-lg mt-2">Cours</a>
    <a href="#" class="block py-2 px-4 hover:bg-gray-600">Utilisateurs</a>
    <a href="#" class="block py-2 px-4 hover:bg-gray-600">Se déconnecter</a>
</div>

<script>
    // ✅ Logique JavaScript pour afficher/cacher le menu mobile
    const toggleButton = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggleButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>