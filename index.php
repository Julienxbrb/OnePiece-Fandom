<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="keywords" content="One Piece, one piece, one piece wiki, one piece fandom" />
  <meta name="description" content="One Piece Fandom, Une Encyclopédie One Piece réalisée par un fan. Vous trouverez sur ce site un maximum d'informations concernant l'oeuvre du mangaka Eiichirō Oda." />
  <meta name="author" content="Julien Bourbao" />


  <link rel="icon" href="./images/op-icon.png" type="image/x-icon" />

  <link rel="stylesheet" href="./css/main.css" />
  <link rel="stylesheet" href="./css/queries.css" />
  <title>One Piece Fandom</title>
</head>

<body onload="randomQuotes()">

  <?php include "./php/layouts/header.php"; ?>

  <main>
    <div id="darkmode" class="main-page">
      <section class="main-container">

        <?php include "./php/components/home.php"; ?>
        <div>
          <?php include "./php/components/spoiler.php"; ?>
          <?php include "./php/components/quotes.php"; ?>
          <?php include "./php/components/covers.php"; ?>
          <?php include "./php/components/panels.php"; ?>
          <?php include "./php/components/events.php"; ?>
        </div>

      </section>
      <?php include "./php/layouts/aside.php"; ?>
    </div>
  </main>

  <?php include "./php/layouts/footer.php"; ?>

  <?php include "./php/components/modal-window.php"; ?>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
  <script src="./js/app.js"></script>
  <script src="./js/darkmode.js"></script>
  <script src="./js/carousel.js"></script>
  <script src="./js/btntop.js"></script>
  <script src="./js/sticky-nav.js"></script>
  <script src="./js/modal.js"></script>
</body>

</html>