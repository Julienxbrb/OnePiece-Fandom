<?php
include "./../../backend/server-config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../../css/main.css">
  <link rel="stylesheet" href="./../../css/pages/personnages.css" />
  <link rel="stylesheet" href="../../css/admin/home-admin.css">
  <link rel="stylesheet" href="../../css/queries.css">

  <title>Admin Personnages</title>
</head>

<body>
  <header>
    <nav class="navbar">
      <ul class="nav">
        <a class="btn-gotohomepage" href="https://onepiece.julien-bourbao.com">
          <li>Accueil</li>
        </a>
        <div class="dropdown">
          <p class="dropbtn">
            Personnages
          </p>
        </div>
        <div class="dropdown">
          <p class="dropbtn">
            Fruits du Démon
          </p>
        </div>
        <div class="dropdown">
          <p class="dropbtn">
            Histoire
          </p>
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
          <button id="defaultOpen" class="tablink" onclick="openPage('Pirates', this, '#f3a327')">
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
            <?php
            $personnages = $bdd->query('SELECT * FROM personnages');
            $persos = $personnages->fetchAll(PDO::FETCH_ASSOC);

            foreach ($persos as $perso) :
              if ($perso['equipages'] == "strawhat") {
            ?>
                <div class="bloc-img">
                  <a href="">
                    <img src="./../../images/characters/strawhat/<?= $perso['image'] ?>" alt="<?= $perso['name'] ?>" />
                  </a>
                  <a href="#"> <?= $perso['name'] ?> </a>
                </div>

            <?php }
            endforeach; ?>
          </div>


          <div class="header-crew">
            <a href="">
              <h2>L'Équipage de Roger</h2>
            </a>
            <p>(Rojā Kaizoku-dan)</p>
          </div>
          <div class="galery pirates-2">
            <?php
            foreach ($persos as $perso) :
              if ($perso['equipages'] == "roger") {
            ?>
                <div class="bloc-img">
                  <a href="">
                    <img src="./../../images/characters/roger-crew/<?= $perso['image'] ?>" alt="<?= $perso['name'] ?>" />
                  </a>
                  <a href="#"> <?= $perso['name'] ?> </a>
                </div>

            <?php }
            endforeach; ?>
          </div>


          <div class="header-crew">
            <a href="">
              <h2>L'Équipage de Barbe Blanche</h2>
            </a>
            <p>(Shirohige Kaizoku-dan)</p>
          </div>
          <div class="galery pirates-3">
            <?php
            foreach ($persos as $perso) :
              if ($perso['equipages'] == "shirohige") {
            ?>
                <div class="bloc-img">
                  <a href="">
                    <img src="./../../images/characters/shirohige/<?= $perso['image'] ?>" alt="<?= $perso['name'] ?>" />
                  </a>
                  <a href="#"> <?= $perso['name'] ?> </a>
                  <p><?= $perso['division_shirohige'] ?></p>
                </div>
            <?php }
            endforeach; ?>
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
            <?php
            $personnages = $bdd->query('SELECT * FROM personnages');
            $persos = $personnages->fetchAll(PDO::FETCH_ASSOC);
            foreach ($persos as $perso) :
              if ($perso['marines'] == "amiralChef") {
            ?>
                <div class="bloc-img">
                  <a href="">
                    <img src="./../../images/characters/marines/amiral-chef/<?= $perso['image'] ?>" alt="<?= $perso['name'] ?>" />
                  </a>
                  <a href="#"> <?= $perso['name'] ?> </a>
                  <p> <?= $perso['statut'] ?> </p>
                </div>
            <?php }
            endforeach; ?>
          </div>
        </div>
      </section>


    </div>

  </main>


  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="./../../js/tabs.js"></script>
  <script src="./../../js/darkmode.js"></script>
</body>

</html>