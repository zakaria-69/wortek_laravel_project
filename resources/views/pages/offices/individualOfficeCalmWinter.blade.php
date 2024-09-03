<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>Bureau individuel "Hiver calme"</title>
</head>

<body>
    @include("partials.header");
    <div class="officeCard-title-description">
        <h5>Bureau individuel <span class="branding-name">"Hiver calme"</span></h5>
        <p>
            Travailler en solitaire dans le calme c'est bien mais travailler en solitaire dans le calme avec en plus la
            possibilité d'échanger à tout moment autour d'un café,
            d'une corbeille de fruits frais ou encore de partager des moments avec les membres d'une
            communautée bienveillante issue de divers horizons c'est mieux.
        </p>
        <p>Louez dès maintenant Ce <span class="keywords">bureau individuel</span> parfait pour retrouver <span
                class="keywords"> le
                calme
                d'une nuit hivernal et ainsi allier focus, moments de break et d'échange dans une ambiance
                conviviale.</span></p>
        <img class="office_img" src="{{ asset('/assets/img/bureau_individuel.png') }}" />
    </div>
    <hr>
    <div class="commoditees_container">
        <h5>Ce que propose ce bureau</h5>
        <ul>
        <li class="commoditees_list">
                <p class="commoditees">Un espace entièrement privé au calme.</p>
            </li>
            <li class="commoditees_list">
                <p class="commoditees">Wifi haut débit.</p>
            </li>
            <li class="commoditees_list">
                <p class="commoditees">Café gratuit à volonté.</p>
            </li>
            <li class="commoditees_list">
                <p class="commoditees">distributeur de boissons.</p>
            </li>
            <li class="commoditees_list">
                <p class="commoditees">Accès à la cuisine.</p>
            </li>
            <li class="commoditees_list">
                <p class="commoditees">imprimantes.</p>
            </li>
            <li class="commoditees_list">
                <p class="commoditees">Papier.</p>
            </li>
            <li class="commoditees_list">
                <p class="commoditees">Stylos et crayons.</p>
            </li>
            <li class="commoditees_list">
                <p class="commoditees">Gardien présent toutes la journée pour vous aider en cas de problème.</p>
            </li>
        </ul>
    </div> 
    <hr>
    @include("partials.footer");
</body>

</html>