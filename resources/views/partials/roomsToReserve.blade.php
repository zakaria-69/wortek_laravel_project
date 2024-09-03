<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Réservez des locaux à vôtre convenance</h1>
  <div id="carouselExampleIndicators" class="carousel slide d-flex">
    <ol class="carousel-indicators mx-auto">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        data-bs-ride="carousel" aria-current="true" aria-label="Slide 0"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 1"
        id="carouselIndicators"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"
        id="carouselIndicators"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"
        id="carouselIndicators"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 4"
        id="carouselIndicators"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 5"
        id="carouselIndicators"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 6"
        id="carouselIndicators"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 7"
        id="carouselIndicators"></button>
    </ol>
    <div class="carousel-inner mb-5">
      <div class="carousel-item active">
        <div class="officeCard-title-description">
          <h5>Bureau individuel <span class="branding-name">"Hiver calme"</span></h5>
          <p>
            <!-- Travailler en solitaire dans le calme c'est bien mais travailler en solitaire dans le calme avec en plus la
            possibilité d'échanger à tout moment
            autour d'un café, d'une corbeille de fruits frais ou encore de partager des moments avec les membres d'une
            communautée bienveillante issue de divers horizons c'est mieux. -->
            <!-- </br> -->
            Ce <span class="keywords">bureau individuel</span> est parfait pour retrouver <span class="keywords"> le
              calme
              d'une nuit hivernal et ainsi allier focus, moments de break et d'échange dans une ambiance
              conviviale.</span>
          </p>
        </div>
        <div class="officeCard-img-container">
          <a href="#">
            <img class="d-block w-60" src="{{ asset('assets/img/bureau_individuel.png') }}"
              alt="Bureau individuel numéro 1">
            <span id="voir-plus">Voir plus</span>
          </a>
        </div>

      </div>
      <div class="carousel-item">
        <div class="officeCard-title-description">
          <h5>Bureau individuel <span class="branding-name">"Automne doux"</span></h5>
          <p>
            <!-- Quand les feuilles tombes et que les idées naissent, quoi de mieux que ce bureau individuel pour donner vie
            à nos idées.
            Plongez toute l'année dans une ambiance automnal pour donner vie à vos projets dans un cadre qui vous
            rapplera que<span class="keywords"> le renouveau n'est qu'une partie d'un cycle bien plus
              prommétteur.</span>
            </br> -->
            Ce <span class="keywords">bureau individuel</span> vous permettra de travailler à vôtre guise tout en
            vous offrant la possibilité à tout moment de <span class="keywords">partager vos idées avec d'autres membre
              de nôtre communautée.</span>
          </p>
        </div>
        <div class="officeCard-img-container">
          <a href="#">
            <img class="d-block w-60" data-interval="5000" src="{{ asset('assets/img/bureau_individuel_2.jpg') }}"
              alt="Bureau individuel numéro 2">
            <span id="voir-plus">Voir plus</span>
          </a>
        </div>
      </div>
      <div class="carousel-item">
        <div class="officeCard-title-description">
          <h5>Bureau 2 à 5 personnes <span class="branding-name">"Timide été"</span></h5>
          <p>
            <!-- Envie de travaillé en petite équipe? de brainstormer dans un cadre qui vous est dédié? de partager vos idées
            ou encore vos avancée?
            Quoi de mieux qu'une espace lumineux confortable et équipé qui vous est entierement réservé? Dans le quel
            vous pourrez
            avancer ensemble et faire un break quand bon vous semble autour d'un café d'une pause déjeuner, d'une
            corbeille de fruits frais ou encore d'une espace éxterieur pour vous ressourcer.
            </br> -->
            <span class="keywords">Ce bureau de deux à cinq personnes</span> vous permettra de <span
              class="keywords">travailler en équipe d'échanger dans un cadre calme au saveur d'un doux été</span> vous
            rappelant ainsi que tout comme en été <span class="keywords">on se sent plus vivant en échangeant avec les
              autres. </span>
          </p>
        </div>
        <div class="officeCard-img-container">
          <a href="#">
            <img class="d-block w-60" src="{{ asset('assets/img/bureau_2_5_personnes.png') }}"
              alt="bureau 2 à 5_personnes numéro 1">
            <span id="voir-plus">Voir plus</span>
          </a>
        </div>
      </div>
      <div class="carousel-item">
        <div class="officeCard-title-description">
          <h5>Bureau 2 à 5 personnes <span class="branding-name">"Cèpe d'automne "</span></h5>
          <p>
            <!-- Tout comme le Cèpe baigner dans les bonnes énergies autour de vous vous fera grandir et évolué ensemble.
            </br> -->
            <span class="keywords">Ce bureau de deux à cinq personnes au couleurs de l'automne </span> vous
            rappelera que <span class="keywords">la vie nait d'échange et de partage.</span>
          </p>

        </div>
        <div class="officeCard-img-container">
          <a href="#">
            <img class="d-block w-60" src="{{ asset('assets/img/bureau_2_5_personnes_2.jpg') }}"
              alt="bureau 2 à 5_personnes numéro 2">
            <span id="voir-plus">Voir plus</span>
          </a>
        </div>
      </div>
      <div class="carousel-item">
        <div class="officeCard-title-description">
          <h5>Bureau 2 à 5 personnes <span class="branding-name">"Hiver précoce"</span></h5>
          <p>
            <!-- Tout comme un hiver précoce vos projets arrivent plus tot que prévu et cela vous fait froid dans le dos?
            Pas de panique on regroupe l'équipe on partage nos idées, nôtre vision des choses, on s'écoute et on se
            respecte et on avance ensemble. -->
            <span class="keywords">Ce bureau de deux à cinq personne vous rappelera vos longues nuits d'hiver avec vos
              proches au coin du feu à partager vos histoires et vos idées.</span>
          </p>
        </div>
        <div class="officeCard-img-container">
          <a href="#">
            <img class="d-block w-60" src="{{ asset('assets/img/bureau_2_5_personnes_3.jpg') }}"
              alt="bureau 2 à 5_personnes numéro 3">
            <span id="voir-plus">Voir plus</span>
          </a>
        </div>

      </div>
      <div class="carousel-item">
        <div class="officeCard-title-description">
          <h5>Open space <span class="branding-name">"printemps naissant"</span></h5>
          <p>
            <!-- Vos projets prennent vie? vos idées grandissent et s'affine? vos travaux prennent des couleurs, évolue et
            cela vous donne envie d'echanger d'avoir des avis ou juste de partager vos doutes ou la fierté de vos
            réalisations? -->
            <!-- <span class="keywords">Cet open space est parfait pour tout cela et plus encore</span>, venez échanger avec -->
            <span class="keywords">tout type de profil présent dans une communautée bienveillante, partager vos doutes
              et vos certitudes,et évoluez.</span>
          </p>
        </div>
        <div class="officeCard-img-container">
          <a href="#">
            <img class="d-block w-60" src="{{ asset('assets/img/open_space.jpg') }}" alt="open space numéro 1">
            <span id="voir-plus">Voir plus</span>
          </a>
        </div>
      </div>
      <div class="carousel-item">
        <div class="officeCard-title-description">
          <h5>salle de réunion <span class="branding-name">"cocktail d'idée estival</span></h5>
          <p>
            <!-- Il parait qu'on ne discute pas les goûts et les couleurs.Et bien dans cette pièces haute en couleurs vous
            pouvez discuter de tout!
            Vos échanges prendront une saveure particulière comme un cocktail en bord de mer. -->
            Cette <span class="keywords">salle de réunion haute en couleure</span> vous permettera d'éxprimer vos idées,
            d'échanger avec vos pair dans un cadre agréable et coloré. </span>
          </p>
        </div>
        <div class="officeCard-img-container">
          <a href="#">
            <img class="d-block w-60" src="{{ asset('assets/img/salle_de_reunion.png') }}"
              alt="salle de réunion numéro 1">
            <span id="voir-plus">Voir plus</span>
          </a>
        </div>
      </div>
      <div class="carousel-item">
        <div class="officeCard-title-description">
          <h5>salle de réunion <span class="branding-name">"Solstice d'été"</span></h5>
          <p>
            <!-- Ca chauffe! vos projets sont sur le feu et vous avez besoin d'un moment avec vôtre équipe pour prendre la
            température? -->
            Cette <span class="branding-name">salle de réunion</span> vous rappelera les <span
              class="branding-name">longues et plaisantes journée d'été</span> ou l'échange se fait simplement
            et où <span class="branding-name">les idées fusent au grés d'un vent doux.</span>
          </p>
        </div>
        <div class="officeCard-img-container">
          <a href="#">
            <img class="d-block w-60" src="{{ asset('assets/img/salle_de_reunion_2.jpg') }}"
              alt="salle de réunion numéro 2">
            <span id="voir-plus">Voir plus</span>
          </a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden"></span>
    </a>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>

</html>