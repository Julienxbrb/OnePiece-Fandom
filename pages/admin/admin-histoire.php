<?php 
  include './../../backend/server-config.php';
?>

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
          <a class="btn-gotohomepage" href="https://onepiece.julien-bourbao.com"
            ><li>Accueil</li></a
          >
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
  </body>
</html>