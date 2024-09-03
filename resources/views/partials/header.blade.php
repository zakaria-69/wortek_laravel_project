<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>
<body>
    
    <header class="header">
    <div class="logo-nav-container">
    <img src="{{ asset('assets/img/logo2_worktek-removebg.png') }}" class="header-logo" alt="logo du site worktek">
        <nav class="header-nav">
            <ul class="header-ul">
            @if(!Request::is('login'))
                <li>
                    <i></i>
                    <a href="{{ route('clients.create') }}">Connexion</a>
                </li>
                @elseif(!Request::is('/login_authentification/authentification'))
                <li>
                    <i></i>
                    <a href="{{ route('auth.showAuthentificationForm') }}" onclick="hideInscriptionLink(e)">Inscription</a>
                </li>
                @endif
                <li>
                    <i></i>
                    <a href="">A propos</a>
                </li>
            </ul>
        </nav>   
    </div>
    <div class="title-container">
    <h1>WORKTEK</h1>
    </div>
       
    </header>

    <script>
             function hideInscriptionLink(e){
        e.preventDefault();
        e.target.parentElement.style.display = "none";
    }

    </script>
   
   
    
</body>
</html>