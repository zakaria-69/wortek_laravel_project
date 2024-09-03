<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
</head>
<body>
    <footer class="footer-container">
    <nav class="footer-nav">
        <div></div>
        
        <ul class="footer-connexion-auth col-4">
        <h2 class="">navigation</h2>
            <li>
                <i></i>
                <a href="{{ route('clients.create') }}">Connexion</a>
            </li>
            <li>
                <i></i>
                <a href="{{ route('auth.showAuthentificationForm') }}">Inscription</a>
            </li>
            <li>
                <i></i>
                <a href="">Contact</a>
            </li>
        </ul>

        <ul class="footer-reseaux-sociaux col-4">
            <h2>Réseaux sociaux</h2>
            <li>
                <i></i>
                <a href="">linkedin</a>
            </li>
            <li>
                <i></i>
                <a href="">youtube</a>
            </li>
            <li>
                <i></i>
                <a href="">instagram</a>
            </li>
        </ul>
        <ul  class="footer-contact-rights col-4">
        <h2>Contact et droits</h2>
        <li>
            <a href="">Contact e-mail</a>
        </li>
        <li>
            <a href="">téléphone</a>
        </li>
        <li>
            <a href="">Charte de confidentialité</a>
        </li>
</ul>
    </nav>
        <p class="copyrights">&copy LADJRAFI ZAKARIA CDA 2023.</p> 
    </footer>
    
    
</body>
</html>