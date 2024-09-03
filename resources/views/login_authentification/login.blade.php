<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <title>Document</title>
</head>
<body>
@include('partials.header')
    <h1>Login page modal</h1>
 <!-- @extends('pages.login_auth') -->
        @csrf
@section('auth-content')
    <!-- Formulaire de connexion -->
    <!-- <form action="{{ route('auth.login') }}" method="post"> -->
        <!-- ... (Champs du formulaire) -->
        
        <a href="{{ route('clients.create') }}">Pas encore inscrit ? S'inscrire ici.</a>
    <!-- </form> -->

    <!-- Lien pour basculer vers le formulaire d'inscription -->
    <a href="{{ route('clients.create') }}">Pas encore inscrit ? S'inscrire ici.</a>
@endsection
@include('partials.footer')
</body>

</html>