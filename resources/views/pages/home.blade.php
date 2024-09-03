<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>Document</title>
</head>
<body>
@include('partials.header')
    <!-- <h1>Page Home</h1> -->
    <!-- <table border="1">
    <thead>
        <tr>
            <th class="client_id">ID</th>
            <th  class="client_name">Nom</th>
            <th class="client_adress">Adresse</th>
            <th class="client_actions">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
            <tr>
                <td >{{ $client->client_id }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->adress }}</td>
                <td>
                    <a href="{{ route('clients.edit', $client->id) }}">Éditer</a> |
                    <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background: none; border: none; color: red; padding: 0; cursor: pointer;">Suppr</button>
                </form>
              </td>
            </tr>
        @endforeach
    </tbody>
</table> -->
<div>
@include('partials.roomsToReserve')
</div>
<!-- <a href="{{ route('clients.create') }}">Connexion</a>
<a href="{{ route('auth.showAuthentificationForm') }}">Inscription</a> -->

@include('partials.footer')
</body>
</html>