<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>Document</title>
</head>
<body>
    @include('partials.header')
    <!-- Formulaire d'inscription -->
    <form action="{{ route('register') }}" method="post" class="mt-5 mb-3 form-group d-flex flex-column justify-content-center align-items-center" method="post">
        @csrf
        <!-- ... (Champs du formulaire) -->
        <div class="col-4">
            <label for="auth-email">Email</label>
            <input type="email" name='email' class="form-control" id="auth-email" aria-describedby="emailHelp" placeholder="Saisissez vôtre email">
            <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais vôtre email!</small>
        </div>
        <div class="col-4 mt-3">
            <label for="auth-password">Mot de passe</label>
            <input type="password" name='password' class="form-control" id="auth-password" placeholder="Saisissez vôtre mot de passe">
        </div>
        <div class="col-4 mt-3">
            <label for="auth-adress">Adresse</label>
            <input type="text" name="adress" class="form-control" id="auth-adress" placeholder="Saisissez vôtre adresse">
        </div>
        <div class="col-4 mt-3">
            <label for="auth-isPremium">Compte Premium</label>
            <input class='col-12 mt-3' type="checkbox" name="isPremium" class="form-check-input" id="auth-isPremium">
        </div>
        <button type="submit" class="btn btn-primary d-flex justify-content-center align-item-center mt-3" onclick="register()">S'inscrire</button>
    </form>

    <!-- Lien pour basculer vers le formulaire de connexion -->
    <div class="d-flex justify-content-center col-12">
    <a href="{{ route('auth.showLoginForm') }}" class="col-3 text-center">Déjà inscrit ? Se connecter ici.</a>
    </div>  
    @include('partials.footer')
</body>
</html>