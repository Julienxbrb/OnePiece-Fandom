<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="keywords" content="One Piece, one piece, one piece wiki, one piece fandom, lieux One Piece," />
  <meta name="description" content="Wiki regroupant les différents lieux présent dans le manga One Piece." />
  <meta name="author" content="Julien Bourbao" />

  <link rel="icon" href="../images/op-icon.png" type="image/x-icon" />

  <link rel="stylesheet" href="../css/main.css" />
  <link rel="stylesheet" href="../css/pages/histoire.css" />
  <link rel="stylesheet" href="../css/queries.css" />
  <title>Histoire | One Piece Fandom</title>
</head>

<body onload="randomQuotes()">
  <header>
    <nav class="navbar">
      <div class="logo-box">
        <img class="logo-header" src="../images/h1-one-piece.webp" alt="" />
        <img class="logo rotate_01" src="../images/op-icon.png" alt="" />
      </div>
      <ul class="nav">
        <a class="btn-gotohomepage" href="http://onepiece.julien-bourbao.com">
          <li>Accueil</li>
        </a>
        <div class="dropdown">
          <p class="dropbtn">
            Monde <ion-icon name="chevron-down-outline"></ion-icon>
          </p>
          <div class="dropdown-content dropdown-content--wider">
            <a href="./personnages.php">Personnages</a>
            <a href="./histoire.php">Histoire</a>
            <a href="./fruitsdudemon.php">Fruits du démon</a>
            <a href="./lieux.php">Lieux</a>
            <a href="#">Organisations</a>
            <a href="#">Société</a>
          </div>
        </div>
        <div class="dropdown">
          <p class="dropbtn">
            Médias <ion-icon name="chevron-down-outline"></ion-icon>
          </p>
          <div class="dropdown-content">
            <a href="#">Manga</a>
            <a href="#">Anime</a>
            <a href="#">Scènes</a>
          </div>
        </div>
        <div class="dropdown">
          <p class="dropbtn">
            Autre <ion-icon name="chevron-down-outline"></ion-icon>
          </p>
          <div class="dropdown-content">
            <a href="#">Règlement</a>
            <a href="#">Quizz/Test</a>
          </div>
        </div>
      </ul>

      <button class="btn-dark" onclick="myFunction()">
        <ion-icon class="rotate_01" name="contrast-outline"></ion-icon>
      </button>
    </nav>
  </header>

  <main>
    <div id="darkmode" class="main-page">
      <section class="main-container">
        <div class="histoire-header">
          <h4 class="histoire-heading">Histoire</h4>
          <p class="histoire-text">
            Cet article présente les différents arcs importants de l'histoire
            dans l'ordre chronologique et suivant l'itinéraire des personnages
            principaux.
          </p>
        </div>
      </section>

      <aside id="aside" class="aside">
        <figure>
          <h3>Radio One Piece</h3>
          <audio id="ost-op" src="../ost/mothersea.ogg" controls loop>
            Your browser does not support the
            <code>audio</code> element.
          </audio>
        </figure>

        <div class="aside-bloc1">
          <h3>Liens rapides</h3>
          <ul>
            <a href="#">
              <li>Enies Lobby</li>
            </a>
            <a href="#">
              <li>Arlong Park</li>
            </a>
            <a href="#">
              <li>Marine Ford</li>
            </a>
            <a href="#">
              <li>Skypeia</li>
            </a>
            <a href="#">
              <li>Wano Kuni</li>
            </a>
          </ul>
        </div>

        <div class="aside-bloc2">
          <h3>Dernières sorties</h3>
          <ul>
            <a href="https://www.scan-vf.net/one_piece/chapitre-1056/1" target="_blank">
              <li>Manga: Chapitre 1056 VF</li>
            </a>
            <a href="https://onepiece-streaming.co" target="_blank">
              <li>Anime: Episode 1029 Vostfr</li>
            </a>
          </ul>
        </div>
      </aside>
    </div>
  </main>

  <footer>
    <button id="btnScrollToTop" class="btn-up">
      <ion-icon name="caret-up-outline"></ion-icon>
    </button>
    <div class="footer-bloc-1">
      <div class="head-bloc-1">
        <div class="logo-footer">
          <h3>One piece<br />Fandom</h3>
          <img class="rotate_01" src="../images/op-icon.png" alt="" />
        </div>
        <p>Petit projet réalisé par un fan</p>
      </div>

      <p>Copyright <span>&copy;</span> 2022</p>
      <ul>
        <a href="https://www.linkedin.com/in/julien-bourbao/" target="_blank">
          <li>
            <ion-icon name="logo-linkedin"></ion-icon>
          </li>
        </a>
        <a href="#">
          <li>
            <ion-icon name="logo-pinterest"></ion-icon>
          </li>
        </a>
        <a href="https://twitter.com/bourba_" target="_blank">
          <li>
            <ion-icon name="logo-twitter"></ion-icon>
          </li>
        </a>
        <a href="https://github.com/Julienxbrb" target="_blank">
          <li>
            <ion-icon name="logo-github"></ion-icon>
          </li>
        </a>
      </ul>
    </div>

    <div class="footer-bloc-2">
      <h3 class="footer-heading">Navigation</h3>
      <ul>
        <li><a href="https://onepiece.julien-bourbao.com">Accueil</a></li>
        <li><a href="./personnages.php">Personnages</a></li>
        <li><a href="./histoire.php">Histoire</a></li>
        <li><a href="./fruitsdudemon.php">Fruits du démon</a></li>
        <li><a href="./lieux.php">Lieux</a></li>
        <li><a href="#">Organisations</a></li>
        <li><a href="#">Société</a></li>
        <div class="divider-2"></div>
        <li><a href="#">Manga</a></li>
        <li><a href="#">Anime</a></li>
        <li><a href="#">Scènes</a></li>
        <li><a href="#">Autre</a></li>
      </ul>
    </div>
    <div class="footer-bloc-3">
      <h3 class="footer-heading">Communauté</h3>
      <ul>
        <li><a href="#">Discord</a></li>
        <li><a href="#">Support</a></li>
        <li><a href="#">Aide</a></li>
      </ul>

      <h3 class="footer-heading">Ressources</h3>
      <ul>
        <li><a href="#">Conditions d'utilisations</a></li>
        <li><a href="#">Politique de confidentialité</a></li>
        <li><a href="#">Plan du site</a></li>
      </ul>
    </div>
  </footer>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="../js/app.js"></script>
  <script src="../js/darkmode.js"></script>
  <script src="../js/tabs.js"></script>
  <script src="../js/btntop.js"></script>
  <script src="../js/sticky-nav.js"></script>
</body>

</html>