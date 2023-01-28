<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../../css/admin/admin.css">
  <link rel="stylesheet" href="../../css/queries.css">
  <link rel="icon" href="../../images/op-icon.png" type="image/x-icon" />
  <title>Admin Login | One Piece Fandom</title>
</head>

<body>
  <form class="admin-form" action="./../../backend/connect/connect-back.php" method="POST">
    <img src="../../images/OnePiece.webp" alt="">
    <h1 class="admin-form--heading">Connexion Admin</h1>

    <input id="email" name="email" type="email" placeholder="Adresse email" autocomplete="off">
    <input id="password" name="password" type="password" placeholder="Mot de passe">

    <button class="btn-submit" id="submit" name="submit">Continuer</button>
  </form>
</body>

</html>