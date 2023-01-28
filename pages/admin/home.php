<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../../css/admin/home-admin.css">
  <link rel="stylesheet" href="../../css/main.css">
  <link rel="stylesheet" href="../../css/queries.css">
  <title>Home Admin | One Piece Fandom</title>
</head>

<body>
  <header>
    <nav class="navbar">
      <ul class="nav">
        <a class="btn-gotohomepage" href="https://onepiece.julien-bourbao.com">
          <li>Accueil</li>
        </a>
        <div class="dropdown">
          <a href="./admin-personnages.php" class="dropbtn">
            Personnages
          </a>
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
      <div class="admin-accueil">
        <h1>Vous êtes désormais connecté en Admin.</h1>
        <p>Vous pouvez apporter des changements aux pages "Personnages", "Fruits du Démon" et "Histoire".</p>
        <img class="luffy-home" src="../../images/admin/luffy-thumbsup.webp" alt="">
      </div>

    </div>
  </main>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="../../js/app.js"></script>
  <script src="../../js/darkmode.js"></script>
</body>

</html>