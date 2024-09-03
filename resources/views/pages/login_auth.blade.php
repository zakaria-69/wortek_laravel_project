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
<!-- <h1>login-auth</h1> -->
@include('partials.header')
@if(session('success'))
        <div id="success-alert" class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    
    <!-- <h1>Login page</h1>  -->
   
    <form action="{{ route('clients.index') }}" method="post" class="mt-5 mb-3 form-group d-flex flex-column justify-content-center align-items-center">    
        @csrf  
        <div class="form-group form-check col-4">
            <label for="login-email">Email</label>
            <input type="email" name="email" class="form-control" id="login-email" aria-describedby="emailHelp" placeholder="Saisissez vôtre email">
            <small id="emailHelp" class="form-text text-muted">Ne partager jamais vôtre email!</small>
        </div>
        <div class="form-group form-check col-4 mt-3">
            <label for="login-password">Mot de passe</label>
            <input type="password" name="password" class="form-control" id="login-password" placeholder="Saisissez vôtre mot de passe">
        </div>
    <button type="submit" class="btn btn-primary mt-3" onclick="create()" >se connecter</button>
     </form>  
     <div class="d-flex justify-content-center col-12 ">
     <a href="{{ route('auth.showAuthentificationForm') }}" class="col-3 text-center">Pas encore inscrit ? S'inscrire ici.</a>
    </div>
    @include('partials.footer')
    <!-- Compteur de 5 secondes pour le success message  -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var successAlert = document.getElementById('success-alert');
            if (successAlert) {
                setTimeout(function() {
                    successAlert.style.opacity = 0;
                    setTimeout(function() {
                        successAlert.style.display = 'none';
                    }, 600);
                }, 5000);
            }
        });
    </script>
</body>
</html>