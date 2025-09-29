<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue à GestSchool</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2eTDRq72U/vG1t7K6D42V7T+z5i3u+h0eH7G6iX1q7B7a61uX0t5t5P5a5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["{{ asset('assets/css/fonts.min.css') }}"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>
    <style>
        .video-container {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .video-container video {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            object-fit: cover;
            z-index: -1;
            filter: brightness(50%);
        }

        .video-overlay {
            z-index: 1;
            text-align: center;
            color: white;
            padding: 2rem;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans flex flex-col min-h-screen">

    <nav class="bg-gray-800 text-white shadow-md">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center relative">
            <a href="#" class="text-2xl font-bold">
                Gest<span class="text-indigo-400">School</span>
            </a>

            <button id="mobile-menu-button" class="md:hidden text-gray-300 focus:outline-none">
                <i class="fas fa-bars fa-xl"></i>
            </button>

            <div id="navigation-links"
                class="hidden md:flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-4 mt-3 md:mt-0">
                <a href="https://wa.me/votre-numero"
                    class="text-gray-300 hover:text-green-500 transition duration-300 text-xl" aria-label="WhatsApp">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://facebook.com/votre-page"
                    class="text-gray-300 hover:text-blue-500 transition duration-300 text-xl" aria-label="Facebook">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="#contact-form" class="text-gray-300 hover:text-white transition duration-300">Contact</a>
                <div class="flex items-center space-x-3  ml-auto">
                    <a href="/login"
                        class=" text-white py-2 px-4 float-right-10 rounded-full font-semibold hover:bg-indigo-500 transition duration-300 focus:outline-none">
                        Se connecter
                    </a>
                    <a href="/register"
                        class="bg-indigo-600 text-white py-2 px-4 rounded-full font-semibold hover:bg-indigo-700 transition duration-300 focus:outline-none">
                        Add My School
                    </a>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-gray-700 p-4">
            <div class="flex flex-col space-y-2">
                <a href="https://wa.me/670835355"
                    class="text-gray-300 hover:text-green-500 transition duration-300 text-xl">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
                <a href="https://facebook.com/votre-page"
                    class="text-gray-300 hover:text-blue-500 transition duration-300 text-xl">
                    <i class="fab fa-facebook"></i> Facebook
                </a>
                <a href="#contact-form" class="text-gray-300 hover:text-white transition duration-300">Contact</a>
                <a href="/login"
                    class="bg-gray-600 text-white py-2 px-4 rounded-full text-center font-semibold hover:bg-gray-500 transition duration-300">
                    Se connecter
                </a>
                <a href="/register"
                    class="bg-indigo-600 text-white py-2 px-4 rounded-full text-center font-semibold hover:bg-indigo-700 transition duration-300">
                    S'inscrire
                </a>
            </div>
        </div>
    </nav>

    <header class="video-container">
        <video autoplay muted loop id="header-video">
            <source src="{{ asset('assets/video/dev.mp4') }}" type="video/mp4">
            Votre navigateur ne supporte pas les vidéos HTML5.
        </video>
        <div class="video-overlay">
            <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight">
                Gérez votre établissement scolaire <br> avec simplicité.
            </h1>
            <div class="mt-8 flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="/register"
                    class="bg-indigo-600 text-white font-bold py-3 px-8 rounded-full text-lg hover:bg-indigo-700 transition duration-300">
                    Commencer gratuitement
                </a>
                <a href="#contact-form"
                    class="bg-white border-2 border-indigo-600 text-indigo-600 font-bold py-3 px-8 rounded-full text-lg hover:bg-indigo-50 transition duration-300">
                    Nous contacter
                </a>
            </div>
        </div>

    </header>

    <section id="contact-form" class="bg-white py-16 px-6">
        <div class="container mx-auto max-w-2xl">
            <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-800">Contactez-nous</h2>
            <p class="mt-2 text-center text-gray-600">Remplissez le formulaire ci-dessous et nous vous répondrons dans
                les plus brefs délais.</p>

            <form action="mailto:votre-email@example.com" method="post" enctype="text/plain" class="mt-8 space-y-6">
                <div>
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Nom et Prénom</label>
                    <input type="text" id="name" name="name"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        required>
                </div>
                <div>
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        required>
                </div>
                <div>
                    <label for="subject" class="block text-gray-700 font-semibold mb-2">Sujet</label>
                    <input type="text" id="subject" name="subject"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        required>
                </div>
                <div>
                    <label for="message" class="block text-gray-700 font-semibold mb-2">Message</label>
                    <textarea id="message" name="message" rows="5"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit"
                        class="bg-black text-white font-bold py-3 px-8 rounded-full text-lg hover:bg-indigo-700 transition duration-300">
                        Envoyer le message
                    </button>
                </div>
            </form>
        </div>
    </section>

    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto text-center px-6">
            <p>&copy; 2025 GestSchool. Tous droits réservés.</p>
        </div>
    </footer>

    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
