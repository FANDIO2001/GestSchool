<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="w-100" style="max-width: 450px;">
            <div class="card shadow-lg p-4">
                <h2 class="text-center mb-4 text-primary">GESTSHOOL</h2>
                <form method="POST" action="{{ url('/login') }}">
                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <p class="fw-bold">Oups ! Une erreur est survenue.</p>
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Adresse Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            class="form-control" placeholder="votre.email@exemple.com" required autofocus>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label fw-semibold">Mot de passe</label>
                        <input type="password" id="password" name="password" class="form-control"
                            placeholder="••••••••" required>
                        <div class="text-end mt-2">
                            <a href="#" class="text-decoration-none text-primary">Mot de passe oublié ?</a>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 fw-bold">
                        Se connecter
                    </button>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>