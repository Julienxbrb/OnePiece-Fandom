<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="keywords" content="One Piece, one piece,one piece wiki,one piece fandom, one piece personnages" />
  <meta name="description" content="Wiki regroupant les différents personnages du manga One Piece." />
  <meta name="author" content="Julien Bourbao" />

  <link rel="icon" href="../images/op-icon.png" type="image/x-icon" />

  <link rel="stylesheet" href="../css/main.css" />
  <link rel="stylesheet" href="../css/pages/personnages.css" />
  <link rel="stylesheet" href="../css/queries.css" />

  <title>Personnages | One Piece Fandom</title>
</head>

<body>
  <header>
    <nav class="navbar">
      <div class="logo-box">
        <img class="logo-header" src="../images/h1-one-piece.webp" alt="" />
        <img class="logo rotate_01" src="../images/op-icon.png" alt="" />
      </div>
      <ul class="nav">
        <a class="btn-gotohomepage" href="https://onepiece.julien-bourbao.com">
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
        <div class="personnages-header">
          <h4 class="personnages-heading">Personnages</h4>
          <p class="personnages-text">
            Un Personnage (人ジン物ブツ, Jinbutsu) est un être imaginaire créé
            pour exister dans un univers précis (en l'occurrence,
            <a href="#">le Monde de One Piece</a>). Il possède des
            caractéristiques qui lui sont propres, qui le rendent unique, et
            le discerne des autres personnages
          </p>
        </div>
        <div class="button-nav">
          <button class="tablink" onclick="openPage('Pirates', this, '#f3a327')" id="defaultOpen">
            Pirates
          </button>

          <button class="tablink" onclick="openPage('Marines', this, '#f3a327')">
            Marines
          </button>

          <button class="tablink" onclick="openPage('Révolutionnaires', this, '#f3a327')">
            Révolutionnaires
          </button>

          <button class="tablink" onclick="openPage('Schichibukai', this, '#f3a327')">
            7 Grands Corsaires
          </button>
        </div>

        <div id="Pirates" class="tabcontent">
          <div class="header-crew">
            <a href="">
              <h2>L'Équipage du Chapeau de Paille</h2>
            </a>
            <p>(Mugiwara no Ichimi)</p>
          </div>
          <div class="galery pirates-1">
            <div class="bloc-img">
              <a href=""><img src="../images/characters/strawhat/luffy.webp" alt="Monkey D. Lufy" /></a>
              <a href="#">Monkey D. Luffy</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/strawhat/zoro.webp" alt="Roronoa Zoro" /></a>
              <a href="#">Roronoa Zoro</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/strawhat/nami.webp" alt="Nami" /></a>
              <a href="#">Nami</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/strawhat/usopp.webp" alt="Usopp" /></a>
              <a href="#">Usopp</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/strawhat/sanji.webp" alt="Sanji" /></a>
              <a href="#">Sanji</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/strawhat/chopper.webp" alt="Tony Tony Chopper" /></a>
              <a href="#">Tony Tony Chopper</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/strawhat/robin.webp" alt="Nico Robin" /></a>
              <a href="#">Nico Robin</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/strawhat/franky.webp" alt="Franky" /></a>
              <a href="#">Franky</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/strawhat/brook.webp" alt="Brook" /></a>
              <a href="#">Brook</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/strawhat/jinbe.webp" alt="Jinbe" /></a>
              <a href="#">Jinbe</a>
            </div>
          </div>

          <div class="header-crew">
            <a href="">
              <h2>L'Équipage de Roger</h2>
            </a>
            <p>(Rojā Kaizoku-dan)</p>
          </div>
          <div class="galery pirates-2">
            <div class="bloc-img">
              <a href=""><img src="../images/characters/roger-crew/roger.webp" alt="Gol D. Roger" /></a>
              <a href="#">Gol D. Roger</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/roger-crew/rayleigh.webp" alt="Silvers Rayleigh" /></a>
              <a href="#">Silvers Rayleigh</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/roger-crew/scopper.webp" alt="Scopper Gaban" /></a>
              <a href="#">Scopper Gaban</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/roger-crew/crocus.webp" alt="Crocus" /></a>
              <a href="#">Crocus</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/roger-crew/shanks.webp" alt="Young Shanks" /></a>
              <a href="#">Shanks (jeune)</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/roger-crew/baggy.webp" alt="Young Baggy" /></a>
              <a href="#">Baggy (jeune)</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/roger-crew/nozdon.webp" alt="Nozdon" /></a>
              <a href="#">Nozdon</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/roger-crew/sunbell.webp" alt="Sunbell" /></a>
              <a href="#">Sunbell</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/roger-crew/momora.webp" alt="Mr.Momora" /></a>
              <a href="#">Mr.Momora</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/roger-crew/oden.webp" alt="Kozuki Oden" /></a>
              <a href="#">Kozuki Oden</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/roger-crew/toki.webp" alt="Kozuki Toki" /></a>
              <a href="#">Kozuki Toki</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/roger-crew/neko.webp" alt="Nekomamushi" /></a>
              <a href="#">Nekomamushi</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/roger-crew/inu.webp" alt="Inuarashi" /></a>
              <a href="#">Inuarashi</a>
            </div>
          </div>

          <div class="header-crew">
            <a href="">
              <h2>L'Équipage de Barbe Blanche</h2>
            </a>
            <p>(Shirohige Kaizoku-dan)</p>
          </div>
          <div class="galery pirates-3">
            <div class="bloc-img">
              <a href=""><img src="../images/characters/shirohige/newgate.webp" alt="Edward Newgate" /></a>
              <a href="#">Edward Newgate</a>
              <p>(Capitaine, décédé)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/shirohige/marco.webp" alt="Marco" /></a>
              <a href="#">Marco</a>
              <p>(1<sup>ère</sup> Division)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/shirohige/oden.webp" alt="Kozuki Oden" /></a>
              <a href="#">Kozuki Oden</a>
              <p>(2<sup>ème</sup> Division, ancien)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/shirohige/ace.webp" alt="Portgas D. Ace" /></a>
              <a href="#">Portgas D. Ace</a>
              <p>(2<sup>ème</sup> Division, décédé)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/shirohige/joz.webp" alt="Joz" /></a>
              <a href="#">Joz</a>
              <p>(3<sup>ème</sup> Division)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/shirohige/satch.webp" alt="Satch" /></a>
              <a href="#">Satch</a>
              <p>(4<sup>ème</sup> Division, décédé)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/shirohige/vista.webp" alt="Vista" /></a>
              <a href="#">Vista</a>
              <p>(5<sup>ème</sup> Division)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/shirohige/blamenco.webp" alt="Blamenco" /></a>
              <a href="#">Blamenco</a>
              <p>(6<sup>ème</sup> Division)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/shirohige/rakuyou.webp" alt="Rakuyou" /></a>
              <a href="#">Rakuyou</a>
              <p>(7<sup>ème</sup> Division)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/shirohige/namur.webp" alt="Namur" /></a>
              <a href="#">Namur</a>
              <p>(8<sup>ème</sup> Division)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/shirohige/blenheim.webp" alt="Blenheim" /></a>
              <a href="#">Blenheim</a>
              <p>(9<sup>ème</sup> Division)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/shirohige/curiel.webp" alt="Curiel" /></a>
              <a href="#">Curiel</a>
              <p>(10<sup>ème</sup> Division)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/shirohige/kingdew.webp" alt="Kingdew" /></a>
              <a href="#">Kingdew</a>
              <p>(11<sup>ème</sup> Division)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/shirohige/haruta.webp" alt="Haruta" /></a>
              <a href="#">Haruta</a>
              <p>(12<sup>ème</sup> Division)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/shirohige/atmos.webp" alt="Atmos" /></a>
              <a href="#">Atmos</a>
              <p>(13<sup>ème</sup> Division)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/shirohige/speedjiru.webp" alt="Speed Jiru" /></a>
              <a href="#">Speed Jiru</a>
              <p>(14<sup>ème</sup> Division)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/shirohige/fossa.webp" alt="Fossa" /></a>
              <a href="#">Fossa</a>
              <p>(15<sup>ème</sup> Division)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/shirohige/izou.webp" alt="Izou" /></a>
              <a href="#">Izou</a>
              <p>(16<sup>ème</sup> Division)</p>
            </div>
          </div>

          <div class="header-crew">
            <a href="">
              <h2>L'Équipage du Roux</h2>
            </a>
            <p>(Akagami Kaizoku-dan)</p>
          </div>
          <div class="galery pirates-4">
            <div class="bloc-img">
              <a href=""><img src="../images/characters/redhaired/shanks.webp" alt="Shanks" /></a>
              <a href="#">Shanks</a>
            </div>
            <div class="bloc-img">
              <a href="">
                <img src="../images/characters/redhaired/beckman.webp" alt="Benn Beckman" /></a>
              <a href="#">Benn Beckman</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/redhaired/yassop.webp" alt="Yassop" /></a>
              <a href="#">Yassop</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/redhaired/luckyroux.webp" alt="Lucky Roux" /></a>
              <a href="#">Lucky Roux</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/redhaired/limejuice.webp" alt="Limejuice" /></a>
              <a href="#">Limejuice</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/redhaired/bonkpunch.webp" alt="Bonk Punch" /></a>
              <a href="#">Bonk Panchi</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/redhaired/monstar.webp" alt="Monstar" /></a>
              <a href="#">Monstar</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/redhaired/buildingsnake.webp" alt="Building Snake" /></a>
              <a href="#">Building Snake</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/redhaired/hongo.webp" alt="Hongo" /></a>
              <a href="#">Hongo</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/redhaired/howlinggab.webp" alt="Howling Gab" /></a>
              <a href="#">Howling Gab</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/redhaired/rockstar.webp" alt="Rockstar" /></a>
              <a href="#">Rockstar</a>
            </div>
          </div>

          <div class="header-crew">
            <a href="">
              <h2>L'Équipage de Barbe Noire</h2>
            </a>
            <p class="kurohige">(Kurohige Kaizokudan)</p>
          </div>
          <p class="teach-heading">Capitaine</p>
          <div class="galery pirates-5">
            <div class="bloc-img">
              <a href=""><img src="../images/characters/kurohige/teach.webp" alt="Marshall D. Teach" /></a>
              <a href="#">Marshall D. Teach</a>
            </div>
          </div>
          <p class="teach-heading">Les Dix Capitaines Géants</p>
          <div class="galery pirates-5-1">
            <div class="bloc-img">
              <a href=""><img src="../images/characters/kurohige/burgess.webp" alt="Jesus Burgess" /></a>
              <a href="#">Jesus Burgess</a>
              <p>(1<sup>ère</sup> flotte)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/kurohige/shiryu.webp" alt="Shiliew" /></a>
              <a href="#">Shiliew</a>
              <p>(2<sup>ème</sup> flotte)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/kurohige/vanaugur.webp" alt="Van Augur" /></a>
              <a href="#">Van Augur</a>
              <p>(3<sup>ème</sup> flotte)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/kurohige/pizarro.webp" alt="Avalo Pizarro" /></a>
              <a href="#">Avalo Pizarro</a>
              <p>(4<sup>ème</sup> flotte)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/kurohige/lafitte.webp" alt="Lafitte" /></a>
              <a href="#">Lafitte</a>
              <p>(5<sup>ème</sup> flotte)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/kurohige/catarina.webp" alt="Catarina Devon" /></a>
              <a href="#">Catarina Devon</a>
              <p>(6<sup>ème</sup> flotte)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/kurohige/sanjuan.webp" alt="Sanjuan Wolf" /></a>
              <a href="#">Sanjuan Wolf</a>
              <p>(7<sup>ème</sup> flotte)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/kurohige/vasco.webp" alt="Vasco Shot" /></a>
              <a href="#">Vasco Shot</a>
              <p>(8<sup>ème</sup> flotte)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/kurohige/docQ.webp" alt="Doc Q" /></a>
              <a href="#">Doc Q</a>
              <p>(9<sup>ème</sup> flotte)</p>
            </div>
          </div>

          <p class="teach-heading">Autres membres</p>
          <div class="galery pirates-5-2">
            <div class="bloc-img">
              <a href=""><img src="../images/characters/kurohige/stronger.webp" alt="Stronger" /></a>
              <a href="#">Stronger</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/kurohige/kikipatsu.webp" alt="Kikipatsu" /></a>
              <a href="#">Kikipatsu</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/kurohige/maki.webp" alt="Maki" /></a>
              <a href="#">Maki</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/kurohige/tori.webp" alt="Tori" /></a>
              <a href="#">Tori</a>
            </div>
          </div>

          <p class="teach-heading">Alliés</p>
          <div class="galery pirates-5-3">
            <div class="bloc-img">
              <a href=""><img src="../images/characters/kurohige/kuzan.webp" alt="Kuzan" /></a>
              <a href="#">Kuzan</a>
            </div>
          </div>

          <div class="header-crew">
            <a href="">
              <h2>L'Équipage des Rocks</h2>
            </a>
            <p>(Rokkusu Kaizoku-dan)</p>
          </div>
          <div class="galery pirates-6">
            <div class="bloc-img">
              <a href=""><img src="../images/characters/rocks/xebec.webp" alt="Rocks D. Xebec" /></a>
              <a href="#">Rocks D. Xebec</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/rocks/edward.webp" alt="Barbe Blanche" /></a>
              <a href="#">Barbe Blanche</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/rocks/kaido.webp" alt="Kaido" /></a>
              <a href="#">Kaido</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/rocks/bigmom.webp" alt="Big Mom" /></a>
              <a href="#">Big Mom</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/rocks/shiki.webp" alt="Shiki" /></a>
              <a href="#">Shiki</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/rocks/cptjohn.webp" alt="Captain John" /></a>
              <a href="#">Capitaine John</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/noimg.webp" alt="La Hache d'argent" /></a>
              <a href="#">La Hache d'argent</a>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/noimg.webp" alt="Ochoku" /></a>
              <a href="#">Ochoku</a>
            </div>
          </div>
        </div>

        <div id="Marines" class="tabcontent">
          <div class="header-crew">
            <a href="">
              <h2>Amiral en Chef</h2>
            </a>
            <p>(Gensui)</p>
          </div>
          <div class="galery marines-1">
            <div class="bloc-img">
              <a href=""><img src="../images/characters/marines/amiral-chef/akainu.webp" alt="Akainu" /></a>
              <a href="#">Akainu</a>
              <p>(actif)</p>
            </div>

            <div class="bloc-img">
              <a href=""><img src="../images/characters/marines/amiral-chef/sengoku.webp" alt="Sengoku" /></a>
              <a href="#">Sengoku</a>
              <p>(démission)</p>
            </div>

            <div class="bloc-img">
              <a href=""><img src="../images/characters/marines/amiral-chef/kong.webp" alt="Kong" /></a>
              <a href="#">Kong</a>
              <p>(promu)</p>
            </div>
          </div>
          <div class="header-crew header-crew--blue">
            <a href="">
              <h2>Amiraux (trio actuel)</h2>
            </a>
            <p>(Taishō)</p>
          </div>
          <div class="galery marines-2">
            <div class="bloc-img">
              <a href=""><img src="../images/characters/marines/amiraux/kizaru2.webp" alt="Kizaru" /></a>
              <a href="#">Borsalino</a>
              <p>(Kizaru)</p>
            </div>

            <div class="bloc-img">
              <a href=""><img src="../images/characters/marines/amiraux/issho.webp" alt="Issho" /></a>
              <a href="#">Issho</a>
              <p>(Fujitora)</p>
            </div>

            <div class="bloc-img">
              <a href=""><img src="../images/characters/marines/amiraux/aramaki.webp" alt="Aramaki" /></a>
              <a href="#">Aramaki</a>
              <p>(Ryokugyu)</p>
            </div>
          </div>

          <div class="header-crew">
            <a href="">
              <h2>Amiraux (ancien trio)</h2>
            </a>
            <p>(Taishō)</p>
          </div>
          <div class="galery marines-3">
            <div class="bloc-img">
              <a href=""><img src="../images/characters/marines/amiraux/kizaru.webp" alt="Kizaru" /></a>
              <a href="#">Borsalino</a>
              <p>(Kizaru)</p>
            </div>

            <div class="bloc-img">
              <a href=""><img src="../images/characters/marines/amiraux/akainu.webp" alt="Akainu" /></a>
              <a href="#">Sakazuki</a>
              <p>(Akainu)</p>
            </div>

            <div class="bloc-img">
              <a href=""><img src="../images/characters/marines/amiraux/aokiji.webp" alt="Aramaki" /></a>
              <a href="#">Kuzon</a>
              <p>(Aokiji)</p>
            </div>
          </div>
        </div>

        <div id="Révolutionnaires" class="tabcontent">
          <div class="header-crew">
            <a href="">
              <h2>Chef et bras droit</h2>
            </a>
          </div>
          <div class="galery revol-1">
            <div class="bloc-img">
              <a href=""><img src="../images/characters/revolutionnaires/dragon.webp" alt="Monkey D. Dragon" /></a>
              <a href="#">Monkey D. Dragon</a>
              <p>(chef)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/revolutionnaires/sabo.webp" alt="Sabo" /></a>
              <a href="#">Sabo</a>
              <p>(bras droit)</p>
            </div>
          </div>

          <div class="header-crew">
            <a href="">
              <h2>Commandants et<br />Sous-Commandants</h2>
            </a>
          </div>
          <div class="galery revol-2">
            <div class="bloc-img">
              <a href=""><img src="../images/characters/revolutionnaires/ivankov.webp" alt="Ivankov" /></a>
              <a href="#">Ivankov</a>
              <p>(G)</p>
            </div>

            <div class="bloc-img">
              <a href=""><img src="../images/characters/revolutionnaires/betty.webp" alt="Belo Betty" /></a>
              <a href="#">Bello Betty</a>
              <p>(Est)</p>
            </div>

            <div class="bloc-img">
              <a href=""><img src="../images/characters/revolutionnaires/karasu.webp" alt="Karasu" /></a>
              <a href="#">Karasu</a>
              <p>(Nord)</p>
            </div>

            <div class="bloc-img">
              <a href=""><img src="../images/characters/revolutionnaires/morley.webp" alt="Morley" /></a>
              <a href="#">Morley</a>
              <p>(Ouest)</p>
            </div>

            <div class="bloc-img">
              <a href=""><img src="../images/characters/revolutionnaires/lindbergh.webp" alt="Lindbergh" /></a>
              <a href="#">Lindbergh</a>
              <p>(Sud)</p>
            </div>

            <div class="bloc-img">
              <a href=""><img src="../images/characters/revolutionnaires/inazuma.webp" alt="Inazuma" /></a>
              <a href="#">Inazuma</a>
              <p>(G)</p>
            </div>
            <div class="bloc-img">
              <a href=""><img src="../images/characters/revolutionnaires/ahiru.webp" alt="Ahiru" /></a>
              <a href="#">Ahiru</a>
              <p>(Est)</p>
            </div>
          </div>
        </div>

        <div id="Schichibukai" class="tabcontent">
          <div class="header-crew header-crew--blue">
            <a href="">
              <h2>Titres révoqués lors de la Dissolution</h2>
            </a>
          </div>
          <div class="galery corsaires-1">
            <div class="bloc-img">
              <a href=""><img src="../images/characters/grandscorsaires/mihawk.webp" alt="Dracule Mihawk" /></a>
              <a href="#">Dracule Mihawk</a>
            </div>

            <div class="bloc-img">
              <a href=""><img src="../images/characters/grandscorsaires/kuma.webp" alt="Bartholomew Kuma" /></a>
              <a href="#">Bartholomew Kuma</a>
            </div>

            <div class="bloc-img">
              <a href=""><img src="../images/characters/grandscorsaires/boa.webp" alt="Boa Hancock" /></a>
              <a href="#">Boa Hancock</a>
            </div>

            <div class="bloc-img">
              <a href=""><img src="../images/characters/grandscorsaires/baggy.webp" alt="Baggy" /></a>
              <a href="#">Baggy</a>
            </div>

            <div class="bloc-img">
              <a href=""><img src="../images/characters/grandscorsaires/weevil.webp" alt="Edward Weevil" /></a>
              <a href="#">Edward Weevil</a>
            </div>
          </div>

          <div class="header-crew header-crew--blue">
            <a href="">
              <h2>Titres révoqués avant la Dissolution</h2>
            </a>
          </div>
          <div class="galery corsaires-2">
            <div class="bloc-img">
              <a href=""><img src="../images/characters/grandscorsaires/crocodile.webp" alt="Crocodile" /></a>
              <a href="#">Crocodile</a>
            </div>

            <div class="bloc-img">
              <a href=""><img src="../images/characters/grandscorsaires/moria.webp" alt="Gecko Moria" /></a>
              <a href="#">Gecko Moria</a>
            </div>

            <div class="bloc-img">
              <a href=""><img src="../images/characters/grandscorsaires/law.webp" alt="Trafalgar Law" /></a>
              <a href="#">Trafalgar Law</a>
            </div>

            <div class="bloc-img">
              <a href=""><img src="../images/characters/grandscorsaires/doflamingo.webp" alt="Don Quichotte Doflamingo" /></a>
              <a href="#">Doflamingo</a>
            </div>
          </div>

          <div class="header-crew header-crew--blue">
            <a href="">
              <h2>Résignation</h2>
            </a>
          </div>
          <div class="galery corsaires-3">
            <div class="bloc-img">
              <a href=""><img src="../images/characters/grandscorsaires/jinbe.webp" alt="Jinbe" /></a>
              <a href="#">Jinbe</a>
            </div>

            <div class="bloc-img">
              <a href=""><img src="../images/characters/grandscorsaires/teach.webp" alt="Marshall D. Teach" /></a>
              <a href="#">Marshall D. Teach</a>
            </div>
          </div>

          <div class="header-crew header-crew--blue">
            <a href="">
              <h2>Propositions du Gouvernement Mondial</h2>
            </a>
          </div>
          <div class="galery corsaires-4">
            <div class="bloc-img">
              <a href=""><img src="../images/characters/grandscorsaires/ace.webp" alt="Portgas D. Ace" /></a>
              <a href="#">Portgas D. Ace</a>
              <p>(Rejetée)</p>
            </div>

            <div class="bloc-img">
              <a href=""><img src="../images/noimg.webp" alt="Ennemi de Z" /></a>
              <a href="#">Ennemi de Z</a>
              <p>(Hors-série)</p>
            </div>
          </div>
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
          <h3>Les plus consultés</h3>
          <ul>
            <a href="#">
              <li>Monkey D. Luffy</li>
            </a>
            <a href="#">
              <li>Shanks</li>
            </a>
            <a href="#">
              <li>Gol D. Roger</li>
            </a>
            <a href="#">
              <li>Kozuki Oden</li>
            </a>
            <a href="#">
              <li>Monkey D. Dragon</li>
            </a>
          </ul>
        </div>

        <div class="aside-bloc2">
          <h3>Dernières sorties</h3>
          <ul>
            <a href="https://www.scan-vf.net/one_piece/chapitre-1053/1" target="_blank">
              <li>Manga: Chapitre 1053 VF</li>
            </a>
            <a href="https://onepiece-streaming.co" target="_blank">
              <li>Anime: Episode 1022 Vostfr</li>
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