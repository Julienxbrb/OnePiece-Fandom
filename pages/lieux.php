<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta
      name="keywords"
      content="One Piece, one piece, one piece wiki, one piece fandom, lieux One Piece,"
    />
    <meta
      name="description"
      content="Wiki regroupant les différents lieux présent dans le manga One Piece."
    />
    <meta name="author" content="Julien Bourbao" />

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="icon" href="../images/op-icon.png" type="image/x-icon" />

    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/pages/lieux.css" />
    <link rel="stylesheet" href="../css/queries.css" />
    <title>Lieux | One Piece Fandom</title>
  </head>

  <body onload="randomQuotes()">
    <header>
      <nav class="navbar">
        <div class="logo-box">
          <img class="logo-header" src="../images/h1-one-piece.webp" alt="" />
          <img class="logo rotate_01" src="../images/op-icon.png" alt="" />
        </div>
        <ul class="nav">
          <a class="btn-gotohomepage" href="http://onepiece.julien-bourbao.com"
            ><li>Accueil</li></a
          >
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
          <div class="lieux-header">
            <h4 class="lieux-heading">Lieux</h4>
            <p class="lieux-text">
              Le monde de One Piece est un globe quasiment entièrement couvert
              par les eaux, et se divise en cinq mers :
              <a href="#">East Blue</a>, <a href="#">North Blue</a>,
              <a href="#">West Blue</a>, <a href="#">South Blue</a> et
              <a href="#">Grand Line</a> (appelée aussi "<a href="#"
                >La Route de tous les Périls</a
              >"). Grand Line est elle même divisée en deux parties :
              <a href="#">Paradis</a>, et <a href="#">Le Nouveau Monde</a>.
              Outre de nombreuses îles, la plus grande étendue terrestre se
              trouve être la chaîne montagneuse nommée <a href="#">Red Line</a>.
            </p>
          </div>

          <div class="button-nav--lieux">
            <button
              class="tablink"
              onclick="openPage('eastblue', this, '#f3a327')"
              id="defaultOpen"
            >
              East Blue
            </button>

            <button
              class="tablink"
              onclick="openPage('westblue', this, '#f3a327')"
            >
              West Blue
            </button>

            <button
              class="tablink"
              onclick="openPage('northblue', this, '#f3a327')"
            >
              North Blue
            </button>

            <button
              class="tablink"
              onclick="openPage('southblue', this, '#f3a327')"
            >
              South Blue
            </button>

            <button
              class="tablink"
              onclick="openPage('grandline', this, '#f3a327')"
            >
              Grand Line
            </button>

            <button
              class="tablink"
              onclick="openPage('redline', this, '#f3a327')"
            >
              Red Line
            </button>
          </div>

          <div id="eastblue" class="tabcontent">
            <div class="grid grid--2-cols tab-lieux">
              <div class="lieux-description">
                <h2>East Blue</h2>
                <p>
                  <span>East Blue</span> (東の海イーストブルー, Īsuto Burū) est
                  une <a href="#">zone maritime</a> du <a href="#">monde</a> de
                  One Piece et le lieu des 6 premiers arcs de la série. East
                  Blue peut être considéré comme un océan, composé de quelques
                  îles dispersées et une frontière avec
                  <a href="#">Red Line</a>. C'est la mer considérée comme la
                  plus "faible" dans le monde de One Piece, étant donné que de
                  nombreux facteurs préjudiciables aux autres mers (spécialement
                  dans <a href="#">La Route de tous les Périls</a> où les 4 mers
                  sont unies) sont rassemblés ici.
                </p>
                <p class="info-historique">Informations Historiques</p>
              </div>

              <div class="lieux-card">
                <h2 class="lieux-card_heading">East Blue</h2>
                <img
                  src="../images/lieux/east-blue/carte-eastblue.webp"
                  alt="Carte d'East Blue"
                />
                <p class="lieux-information">Informations</p>
                <div class="card-table">
                  <div class="line-table">
                    <p class="line-title">Nom Japonais:</p>
                    <p class="line-name font-size--11">東の海イーストブルー</p>
                  </div>
                  <div class="line-table">
                    <p class="line-title">Nom Romanisé:</p>
                    <p class="line-name">Īsuto Burū</p>
                  </div>
                  <div class="line-table">
                    <p class="line-title">Nom Français:</p>
                    <p class="line-name">East Blue</p>
                  </div>
                  <div class="line-table">
                    <p class="line-title">
                      Nom Français:<br /><small>(Ancienne édition)</small>
                    </p>
                    <p class="line-name">East-Blue</p>
                  </div>
                  <div class="line-table">
                    <p class="line-title">Première<br />Apparition:</p>
                    <p class="line-name">Chapitre 1, Épisode 1</p>
                  </div>
                </div>
              </div>
              <p class="info-historique--text">
                <a href="#">Loguetown</a>, est la ville d'East Blue la plus
                proche de <a href="#">Grand Line</a> et a été le lieu de
                naissance du défunt <a href="#">Roi des Pirates</a>,
                <a href="#">Gol D. Roger</a>. Elle est également devenue le lieu
                où il a été exécuté, et ce sont les paroles prononcées par Roger
                juste avant sa mort sur l'échafaud qui ont déclenché la grande
                vague de piraterie. Elle est devenue un lieu de halte pour les
                pirates qui se dirigent vers Grand Line. Cette situation a pris
                fin lorsque <a href="#">Smoker</a> fut désigné comme le
                protecteur de la ville, mais cela pourrait très bien recommencer
                une nouvelle fois car Smoker a quitté son poste depuis pour
                tenter de capturer <a href="#">Luffy</a> sur Grand Line.
              </p>
              <p class="lieux-title">Différents lieux</p>
              <div class="lieux-galery-container">
                <p class="galery-title">Lieux se trouvant à East Blue</p>
                <div class="galery-box">
                  <img src="../images/lieux/east-blue/iledegoat.webp" alt="" />
                  <a href="#">Île de Goat (manga)</a>
                </div>
                <div class="galery-box">
                  <img
                    src="../images/lieux/east-blue/ShellsTownBase.webp"
                    alt=""
                  />
                  <a href="#">Shells Town</a>
                </div>
                <div class="galery-box">
                  <img src="../images/lieux/east-blue/shimotsuki.webp" alt="" />
                  <a href="#">Shimotsuki</a>
                </div>
                <div class="galery-box">
                  <img src="../images/no-visuel.png" alt="" />
                  <a href="#">Archipel des Orgao</a>
                </div>
                <div class="galery-box">
                  <img
                    src="../images/lieux/east-blue/ileanimauxrares.webp"
                    alt=""
                  />
                  <a href="#">Île des Animaux Rares</a>
                </div>
                <div class="galery-box">
                  <img src="../images/lieux/east-blue/baratie.webp" alt="" />
                  <a href="#">Baratie</a>
                </div>
                <div class="galery-box">
                  <img src="../images/lieux/east-blue/loguetown.webp" alt="" />
                  <a href="#">Loguetown</a>
                </div>
                <div class="galery-box">
                  <img src="../images/lieux/east-blue/mirrorball.webp" alt="" />
                  <a href="#">Mirrorball</a>
                </div>
                <div class="galery-box grid-col-2">
                  <img src="../images/lieux/east-blue/tequilawolf.webp" alt="" />
                  <a href="#">Tequila Wolf</a>
                </div>
                <div class="galery-box grid-col-3">
                  <img src="../images/lieux/east-blue/royaumeoykot.webp" alt="" />
                  <a href="#">Royaume d'Oykot</a>
                </div>
              </div>
            </div>
          </div>

          <div id="westblue" class="tabcontent">
            <div class="grid grid--2-cols tab-lieux">
              <div class="lieux-description">
                <h2>West Blue</h2>
                <p>
                  <span>West Blue</span> (西の海ウエストブルー, Uesuto Burū) est
                  l'une des 5 zones maritimes principales du Monde de One Piece.
                </p>
                <p class="info-historique">Originaires de West Blue</p>

                <ul class="list-west-blue">
                  <p>
                    A ce jour, nous ne connaissons pas grand-chose sur cette mer
                    :
                  </p>
                  <li>
                    On sait que Thriller Bark, le navire de l'ancien capitaine
                    corsaire Gecko Moria, est une île de West Blue.
                  </li>
                  <li>
                    Nico Robin est née sur l'île d'Ohara, dévastée par le Buster
                    Call qui se trouvait sur cette mer. Elle en est la seule
                    survivante.
                  </li>
                  <li>
                    Brook vient aussi de cette mer où il a servi un certain
                    royaume avant de devenir pirate.
                  </li>
                  <li>
                    On sait aussi que c'est le lieu de naissance de l'assassin
                    Daz Bones et du Supernova Capone Bege.
                  </li>
                  <li>
                    Shanks le Roux, un des Quatre Empereurs, vient également de
                    cette mer.
                  </li>
                </ul>
              </div>

              <div
                class="lieux-card align-self--center margin-top--5 grid-row--2-3"
              >
                <h2 class="lieux-card_heading">West Blue</h2>
                <img
                  src="../images/lieux/west-blue/West_Blue.webp"
                  alt="West Blue"
                />
                <p class="lieux-information">Informations</p>
                <div class="card-table">
                  <div class="line-table">
                    <p class="line-title">Nom Japonais:</p>
                    <p class="line-name font-size--11">西の海ウエストブルー</p>
                  </div>
                  <div class="line-table">
                    <p class="line-title">Nom Romanisé:</p>
                    <p class="line-name">Uesuto Burū</p>
                  </div>
                  <div class="line-table">
                    <p class="line-title">Nom Français:</p>
                    <p class="line-name">West Blue</p>
                  </div>
                  <div class="line-table">
                    <p class="line-title">Première<br />Apparition:</p>
                    <p class="line-name">Chapitre 391; Épisode 275</p>
                  </div>

                  <div class="line-table">
                    <p class="line-title">Type:</p>
                    <p class="line-name">Mer</p>
                  </div>

                  <div class="line-table">
                    <p class="line-title">
                      Regargement<br /><a href="#">Log Pose</a>:
                    </p>
                    <p class="line-name">Log normal</p>
                  </div>
                </div>
              </div>

              <div class="lieux-galery-container">
                <p class="galery-title">Ohara</p>
                <div class="galery-box">
                  <img
                    src="../images/lieux/west-blue/Ohara/nico-robin.webp"
                    alt="Nico Robin enfant"
                  />
                  <a href="#">Nico Robin</a>
                </div>
                <div class="galery-box">
                  <img
                    src="../images/lieux/west-blue/Ohara/Clover.webp"
                    alt="Clover"
                  />
                  <a href="#">Clover</a>
                  <p>(décédé)</p>
                </div>
                <div class="galery-box">
                  <img
                    src="../images/lieux/west-blue/Ohara/nico-olvia.webp"
                    alt="Nico Olvia"
                  />
                  <a href="#">Nico Olvia</a>
                  <p>(décédée)</p>
                </div>
                <div class="galery-box">
                  <img
                    src="../images/lieux/west-blue/Ohara/rint.webp"
                    alt="Rint"
                  />
                  <a href="#">Rint</a>
                  <p>(décédée)</p>
                </div>
                <div class="galery-box">
                  <img
                    src="../images/lieux/west-blue/Ohara/Zadie.webp"
                    alt="Zadie"
                  />
                  <a href="#">Zadie</a>
                  <p>(décédé)</p>
                </div>
                <div class="galery-box">
                  <img
                    src="../images/lieux/west-blue/Ohara/Roche.webp"
                    alt="Roche"
                  />
                  <a href="#">Roche</a>
                  <p>(décédé)</p>
                </div>
                <div class="galery-box">
                  <img
                    src="../images/lieux/west-blue/Ohara/busshiri.webp"
                    webp
                    alt="Busshiri"
                  />
                  <a href="#">Busshiri</a>
                  <p>(décédé)</p>
                </div>
                <div class="galery-box">
                  <img
                    src="../images/lieux/west-blue/Ohara/hack.webp"
                    alt="Hack"
                  />
                  <a href="#">Hack</a>
                  <p>(décédé)</p>
                </div>
                <div class="galery-box">
                  <img
                    src="../images/lieux/west-blue/Ohara/hocha.webp"
                    alt="Hocha"
                  />
                  <a href="#">Hocha</a>
                  <p>(décédée)</p>
                </div>
                <div class="galery-box">
                  <img
                    src="../images/lieux/west-blue/Ohara/gram.webp"
                    alt="Gram"
                  />
                  <a href="#">Gram</a>
                  <p>(décédé)</p>
                </div>
                <div class="galery-box">
                  <img
                    src="../images/lieux/west-blue/Ohara/roji.webp"
                    alt="Roji"
                  />
                  <a href="#">Roji</a>
                  <p>(décédée)</p>
                </div>
                <div class="galery-box">
                  <img
                    src="../images/lieux/west-blue/Ohara/oran.webp"
                    alt="Oran"
                  />
                  <a href="#">Oran</a>
                  <p>(décédé)</p>
                </div>
                <div class="galery-box">
                  <img
                    src="../images/lieux/west-blue/Ohara/Mizuira.webp"
                    alt="Mizuira"
                  />
                  <a href="#">Mizuira</a>
                  <p>(décédée)</p>
                </div>

                <p class="galery-title">Thriller Bark</p>
                <div class="galery-box">
                  <img
                    src="../images/lieux/west-blue/Thriller Bark/moria.webp"
                    alt="Gecko Moria"
                  />
                  <a href="#">Gecko Moria</a>
                </div>
                <div class="galery-box">
                  <img
                    src="../images/lieux/west-blue/Thriller Bark/Hogback.png"
                    alt="Hogback"
                  />
                  <a href="#">Hogback</a>
                </div>
                <div class="galery-box">
                  <img
                    src="../images/lieux/west-blue/Thriller Bark/Absalom.webp"
                    alt="Absalom"
                  />
                  <a href="#">Absolow</a>
                  <p>(décédé)</p>
                </div>
                <div class="galery-box">
                  <img
                    src="../images/lieux/west-blue/Thriller Bark/perona.webp"
                    alt="Perona"
                  />
                  <a href="#">Perona</a>
                </div>
                <div class="galery-box grid-col-2">
                  <img
                    src="../images/lieux/west-blue/Thriller Bark/Victoria_Cindry.webp"
                    alt="Victoria Cindry"
                  />
                  <a href="#">Victoria Cindry</a>
                  <p>(décédée)</p>
                </div>
                <div class="galery-box grid-col-3">
                  <img
                    src="../images/lieux/west-blue/Thriller Bark/Jigoro.webp"
                    alt="Jigoro"
                  />
                  <a href="#">Jigoro</a>
                  <p>(décédé)</p>
                </div>

                <p class="galery-title">Pays de Ka</p>
                <div class="galery-box">
                  <img
                    src="../images/lieux/west-blue/Pays de Ka/Chinjao.png"
                    alt="Chinjao"
                  />
                  <a href="#">Chinjao</a>
                </div>
                <div class="galery-box">
                  <img
                    src="../images/lieux/west-blue/Pays de Ka/Sai.png"
                    alt="Sai"
                  />
                  <a href="#">Sai</a>
                </div>
                <div class="galery-box">
                  <img
                    src="../images/lieux/west-blue/Pays de Ka/boo.png"
                    alt="Boo"
                  />
                  <a href="#">Boo</a>
                </div>
                <div class="galery-box">
                  <img
                    src="../images/lieux/west-blue/Pays de Ka/baby5.png"
                    alt="Baby 5"
                  />
                  <a href="#">Baby 5</a>
                  <p>(Née dans North Blue)</p>
                </div>
                <div class="galery-box">
                  <img
                    src="../images/lieux/west-blue/Pays de Ka/ramen.png"
                    alt="Ramen"
                  />
                  <a href="#">Ramen</a>
                </div>

                <p class="galery-title">Royaume d'Ilisia</p>
                <div class="galery-box grid-col-2">
                  <img
                    src="../images/lieux/west-blue/Royaume Ilisia/thalassa-lucas.png"
                    alt="Thalassa Lucas"
                  />
                  <a href="#">Thalassa Lucas</a>
                  <p>(Statut inconnu)</p>
                </div>
                <div class="galery-box grid-col-3">
                  <img
                    src="../images/lieux/west-blue/Royaume Ilisia/cezar.png"
                    alt="Cezar"
                  />
                  <a href="#">Cezar</a>
                </div>
              </div>
            </div>
          </div>

          <div id="northblue" class="tabcontent"></div>

          <div id="southblue" class="tabcontent"></div>

          <div id="grandline" class="tabcontent"></div>

          <div id="redline" class="tabcontent"></div>
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
              <a href="#"><li>Pays des Wa</li></a>
              <a href="#"><li>Village de Fuchsia</li></a>
              <a href="#"><li>Ohara</li></a>
              <a href="#"><li>Laugh Tale</li></a>
              <a href="#"><li>Nouveau Monde</li></a>
            </ul>
          </div>

          <div class="aside-bloc2">
            <h3>Dernières sorties</h3>
            <ul>
              <a
                href="https://www.scan-vf.net/one_piece/chapitre-1056/1"
                target="_blank"
                ><li>Manga: Chapitre 1056 VF</li></a
              >
              <a href="https://onepiece-streaming.co" target="_blank"
                ><li>Anime: Episode 1029 Vostfr</li></a
              >
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
          <a href="https://www.linkedin.com/in/julien-bourbao/" target="_blank"
            ><li><ion-icon name="logo-linkedin"></ion-icon></li
          ></a>
          <a href="#"
            ><li><ion-icon name="logo-pinterest"></ion-icon></li
          ></a>
          <a href="https://twitter.com/bourba_" target="_blank"
            ><li><ion-icon name="logo-twitter"></ion-icon></li
          ></a>
          <a href="https://github.com/Julienxbrb" target="_blank"
            ><li><ion-icon name="logo-github"></ion-icon></li
          ></a>
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

    <script src="../js/app.js"></script>
    <script src="../js/btntop.js"></script>
    <script src="../js/sticky-nav.js"></script>
  </body>
</html>
