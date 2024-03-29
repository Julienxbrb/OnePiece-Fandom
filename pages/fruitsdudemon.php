<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="keywords" content="One Piece, one piece wiki, one piece fandom, one piece fruits du démon" />
  <meta name="description" content="Wiki regroupant les différents Fruits du démon présent dans le manga One Piece." />
  <meta name="author" content="Julien Bourbao" />

  <link rel="icon" href="../images/op-icon.png" type="image/x-icon" />

  <link rel="stylesheet" href="../css/main.css" />
  <link rel="stylesheet" href="../css/pages/fruitsdudemon.css" />
  <link rel="stylesheet" href="../css/queries.css" />

  <title>Fruits du démon | One Piece Fandom</title>
</head>

<body>
  <header class="header">
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
        <div class="fruits-header">
          <h4 class="fruits-heading">Fruits du Démon</h4>
        </div>
        <div class="button-nav">
          <button class="tablink" onclick="openPage('fruitsdudémon', this, '#f3a327')" id="defaultOpen">
            Fruits du Démon
          </button>

          <button class="tablink" onclick="openPage('paramecia', this, '#f3a327')">
            Paramecia
          </button>

          <button class="tablink" onclick="openPage('zoan', this, '#f3a327')">
            Zoan
          </button>

          <button class="tablink" onclick="openPage('logia', this, '#f3a327')">
            Logia
          </button>
        </div>

        <div id="fruitsdudémon" class="tabcontent">
          <div class="grid grid--2-cols tab-fruits">
            <div class="fruits-text">
              <figure>
                <blockquote>
                  <p class="fruits-quote">
                    Une fois, j'ai entendu dire que les Fruits du Démon sont
                    les incarnations des démons des mers. Si tu en manges un,
                    tu gagneras une capacité spéciale, mais tu ne pourras plus
                    jamais nager.
                  </p>
                </blockquote>
                <figcaption>
                  — Shanks parlant à Baggy des Fruits du Démon.
                </figcaption>
              </figure>

              <div class="fruits-text-présentation">
                <p>
                  Les <b>Fruits du Démon</b> (悪魔の実, Akuma no Mi) sont des
                  fruits légendaires‚ qui donnent diverses aptitudes et
                  capacités spéciales à ceux qui les ont mangés, mais qui en
                  retour les condamne à ne plus jamais pouvoir nager.
                </p>

                <p>
                  La capacité acquise dépend du fruit et de son type. Certains
                  fruits n'apparaissent que dans le manga et d'autres
                  uniquement dans l'anime, créant ainsi une authenticité
                  propre à chacun.
                </p>
                <p>
                  Le principal défaut des Fruits du Démon est qu'ils font
                  porter sur leur utilisateur la malédiction des mers et des
                  océans : une personne ayant mangé un Fruit du Démon ne peut
                  pas nager dans la mer.
                <p class="show-only-query">Au contraire, cette personne va couler comme une enclume et perdre
                  ses forces au contact de l'eau ou du Granit Marin, un minéral
                  extrait par la Marine des fonds marins dégageant la même énergie
                  que la mer. Le premier à en parler est Morgan à Shells Town.</p>
                </p>
              </div>
            </div>
            <div class="fruits-card">
              <h2 class="fruits-card_heading">Fruits du Démon</h2>
              <p class="fruits-descr">
                <span>Fruits du Démon</span> - Paramecia - Zoan - Logia
              </p>
              <img class="fruits-img" src="../images/devil fruits/devilfruits.webp" alt="Image représentant les fruits du démon" />
              <p class="fruits-information">Informations</p>
              <div class="card-table">
                <div class="line-table">
                  <p class="line-title">Nom Japonais:</p>
                  <p class="line-name font-size--11">悪魔の実</p>
                </div>
                <div class="line-table">
                  <p class="line-title">Nom Romanisé:</p>
                  <p class="line-name">Akuma no Mi</p>
                </div>
                <div class="line-table">
                  <p class="line-title">Nom Français:</p>
                  <p class="line-name">Fruits du Démon</p>
                </div>
                <div class="line-table">
                  <p class="line-title">Première<br>utilisation:</p>
                  <p class="line-name">Chapitre 1, Épisode 1</p>
                </div>
                <div class="line-table">
                  <p class="line-title">Apparition<br>du Fruit:</p>
                  <p class="line-name">Chapitre 1, Épisode 4</p>
                </div>
                <div class="line-table">
                  <p class="line-title">Utilisateur<br>Actuel:</p>
                  <p class="line-name">Personnes et objets divers</p>
                </div>
              </div>
            </div>
          </div>

          <p class="fruits-text-2 no-margin-top">
            Au contraire, cette personne va couler comme une enclume et perdre
            ses forces au contact de l'eau ou du Granit Marin, un minéral
            extrait par la Marine des fonds marins dégageant la même énergie
            que la mer. Le premier à en parler est Morgan à Shells Town.
          </p>
        </div>

        <div id="paramecia" class="tabcontent">
          <div class="grid grid--2-cols tab-fruits">
            <div class="fruits-text">
              <p>
                Paramecia /paʁamiʃiɑ/ (超人系パラミシア, Paramishia, traduit
                littéralement par "Système Surhumain"), est le nom donné à un
                certain type de Fruits du Démon. Ces fruits donnent aux
                utilisateurs le pouvoir d'affecter son corps, de manipuler
                l'environnement ou de produire une substance quelconque. C'est
                le type de fruit le plus répandu dans One Piece, et le plus
                imprévisible.
              </p>
              <div class="paramecia-presentation">
                <h2>Présentation</h2>
                <p>
                  Le type Paramecia accorde aux utilisateurs une capacité «
                  surhumaine », en modifiant leur corps de manière à leur
                  donner une capacité spéciale. Ainsi, même de faibles
                  personnes peuvent devenir de redoutables combattants grâce à
                  ce type de fruit. Ces derniers contiennent également la plus
                  grande variété de pouvoirs connus à ce jour dans l'histoire
                  de One Piece. Ce type de fruit peut sembler un peu
                  "fourre-tout" : les Zoan permettent de se transformer
                  <span class="show-only-query"> en animaux, les Logia en éléments naturels, mais les
                    Paramecia, eux, ont des pouvoirs très divers et surprenants.
                    Ceux-ci peuvent être exploités et manipulés de bien des façons, la
                    diversité d'attaques ou les stratégies dépendant fortement de
                    l'utilisateur lui-même.</span>
                </p>
              </div>
            </div>

            <div class="fruits-card">
              <h2 class="fruits-card_heading">Paramecia</h2>
              <p class="fruits-descr">
                Fruits du démon - <span>Paramecia</span> - Zoan - Logia
              </p>
              <img class="fruits-img" src="../images/devil fruits/paramecia-illustration.webp" alt="Image représentant les fruits du démon" />
              <p class="fruits-information fruits-information--blue">Informations</p>
              <div class="card-table">
                <div class="line-table ">
                  <p class="line-title">Nom Japonais:</p>
                  <p class="line-name font-size--11">超人系パラミシア</p>
                </div>
                <div class="line-table ">
                  <p class="line-title">Nom Romanisé:</p>
                  <p class="line-name">Paramishia</p>
                </div>
                <div class="line-table ">
                  <p class="line-title">Nom Français:</p>
                  <p class="line-name">Paramecia</p>
                </div>
                <div class="line-table ">
                  <p class="line-title">Signifiant:</p>
                  <p class="line-name">Système Surhumain</p>
                </div>
                <div class="line-table ">
                  <p class="line-title">Première utilisation:</p>
                  <p class="line-name ">Chapitre 1, Épisode 1</p>
                </div>
                <div class="line-table ">
                  <p class="line-title">Type:</p>
                  <p class="line-name">Paramecia</p>
                </div>
                <div class="line-table ">
                  <p class="line-title">Utilisateur Actuel:</p>
                  <p class="line-name">Personnes et objets divers</p>
                </div>
              </div>
            </div>
          </div>
          <p class="fruits-text-2 no-margin-top">
            en animaux, les Logia en éléments naturels, mais les
            Paramecia, eux, ont des pouvoirs très divers et surprenants.
            Ceux-ci peuvent être exploités et manipulés de bien des façons, la
            diversité d'attaques ou les stratégies dépendant fortement de
            l'utilisateur lui-même.
          </p>

          <div class="table-heading">
            <h3>Liste de Fruits Paramecia connus</h3>
            <small class="fruit-no-illustration">La liste suivante comporte tous les Fruits du Démon de type
              Paramecia par ordre de manifestation.<br>(Certains n'ont pas de visuel)</small>
          </div>

          <table class="table-paramecia">
            <thead>
              <tr>
                <th class="th-heading" colspan="5">
                  Paramecia et leurs utilisateurs
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td title="Monkey D. Luffy">
                  <img src="../images/devil fruits/paramecia/luffy.webp" alt="Monkey D. Luffy" />

                  <img class="hidden-img" src="../images/devil fruits/paramecia/gomu.webp" alt="Gomu Gomu no Mi" />
                </td>

                <td title="Baggy">
                  <img src="../images/devil fruits/paramecia/baggy.webp" alt="Baggy" />
                  <img class="hidden-img" src="../images/devil fruits/paramecia/bara.webp" alt="bara Bara no Mi" />
                </td>
                <td title="Alvida">
                  <img src="../images/devil fruits/paramecia/alvida.webp" alt="Alvida" />

                  <img class="hidden-img" src="../images/devil fruits/paramecia/sube.webp" alt="Sube Sube no Mi" />
                </td>
                <td title="Mikita, Miss Valentine">
                  <img src="../images/devil fruits/paramecia/missvalentine.webp" alt="Miss Valentine" />

                  <img class="hidden-img" src="../images/devil fruits/paramecia/kilo.webp" alt="Kilo Kilo no Mi" />
                </td>
                <td title="Gem, Mr. 5">
                  <img src="../images/devil fruits/paramecia/mr5.webp" alt="Mr. 5" />

                  <img class="hidden-img" src="../images/devil fruits/paramecia/bomu.webp" alt="Bomu Bomu no Mi" />
                </td>
              </tr>
              <tr>
                <th><a href="#">Gomu Gomu no Mi</a></th>
                <th><a href="#">Bara Bara no Mi</a></th>
                <th><a href="#">Sube Sube no Mi</a></th>
                <th><a href="#">Kilo Kilo no Mi</a></th>
                <th><a href="#">Bomu Bomu no Mi</a></th>
              </tr>

              <tr>
                <td title="Nico Robin">
                  <img src="../images/devil fruits/paramecia/robin.webp" alt="Nico Robin" />

                  <img class="hidden-img" src="../images/devil fruits/paramecia/hana.webp" alt="Hana Hana no Mi" />
                </td>
                <td title="Galdino, Mr. 3">
                  <img src="../images/devil fruits/paramecia/mr3.webp" alt="Mr. 3" />

                  <img class="hidden-img" src="../images/devil fruits/paramecia/doru.webp" alt="Doru Doru no Mi" />
                </td>
                <td title="Wapol">
                  <img src="../images/devil fruits/paramecia/wapol.webp" alt="Wapol" />

                  <img class="hidden-img" src="../images/devil fruits/paramecia/baku.webp" alt="Baku Baku no Mi" />
                </td>
                <td title="Bon Clay, Mr. 2">
                  <img src="../images/devil fruits/paramecia/bonclay.webp" alt="Bon Clay" />

                  <img class="hidden-img" src="../images/devil fruits/paramecia/mane.webp" alt="Mane Mane no Mi" />
                </td>
                <td title="Daz Bonez, Mr. 1">
                  <img src="../images/devil fruits/paramecia/dazbonez.webp" alt="Daz Bonez" />

                  <img class="hidden-img" src="../images/devil fruits/paramecia/supa.webp" alt="Supa Supa no Mi" />
                </td>
              </tr>
              <tr>
                <th><a href="#">Ana Ana no Mi</a></th>
                <th><a href="#">Doru Doru no Mi</a></th>
                <th><a href="#">Baku Baku no Mi</a></th>
                <th><a href="#">Mane Mane no Mi</a></th>
                <th><a href="#">Supa Supa no Mi</a></th>
              </tr>

              <tr>
                <td title="Zala, Miss Doublefinger">
                  <img src="../images/devil fruits/paramecia/zala.webp" alt="Zala Miss Doublefinger" />
                  <img class="hidden-img" src="../images/devil fruits/paramecia/toge.webp" alt="Toge Toge no Mi" />
                </td>
                <td title="Hina">
                  <img src="../images/devil fruits/paramecia/hina.webp" alt="Mr. 3" />
                </td>
                <td title="Bellamy">
                  <img src="../images/devil fruits/paramecia/bellamy.webp" alt="Wapol" />
                </td>
                <td title="Don Quichotte Doflamingo">
                  <img src="../images/devil fruits/paramecia/doflamingo.webp" alt="Don Quichotte Doflamingo" />
                </td>
                <td title="Foxy">
                  <img src="../images/devil fruits/paramecia/foxy.webp" alt="Foxy" />
                </td>
              </tr>
              <tr>
                <th><a href="#">Toge Toge no Mi</a></th>
                <th><a href="#">Ori Ori no Mi</a></th>
                <th><a href="#">Bane Bane no Mi</a></th>
                <th><a href="#">Ito Ito no Mi</a></th>
                <th><a href="#">Noro Noro no Mi</a></th>
              </tr>

              <tr>
                <td title="Blueno">
                  <img src="../images/devil fruits/paramecia/blueno.webp" alt="Blueno" />
                </td>
                <td title="Kalifa">
                  <img src="../images/devil fruits/paramecia/kalifa.webp" alt="Kalifa" />
                  <img class="hidden-img" src="../images/devil fruits/paramecia/awa.webp" alt="Awa Awa no Mi" />
                </td>
                <td title="Very Good">
                  <img src="../images/devil fruits/paramecia/verygood.webp" alt="Very Good" />
                </td>
                <td title="Shû">
                  <img src="../images/devil fruits/paramecia/shû.webp" alt="Shû" />
                </td>
                <td title="Sharinguru">
                  <img src="../images/devil fruits/paramecia/sharinguru.webp" alt="Sharinguru" />
                </td>
              </tr>
              <tr>
                <th><a href="#">Doa Doa no Mi</a></th>
                <th><a href="#">Awa Awa no Mi</a></th>
                <th><a href="#">Beri Beri no Mi</a></th>
                <th><a href="#">Sabi Sabi no Mi</a></th>
                <th><a href="#">Shari Shari no Mi</a></th>
              </tr>

              <tr>
                <td title="Brook">
                  <img src="../images/devil fruits/paramecia/brook.webp" alt="Brook" />
                </td>
                <td title="Gecko Moria">
                  <img src="../images/devil fruits/paramecia/moria.webp" alt="Gecko Moria" />

                  <img class="hidden-img" src="../images/devil fruits/paramecia/kage.webp" alt="Kage Kage no Mi" />
                </td>
                <td title="Perona">
                  <img src="../images/devil fruits/paramecia/perona.webp" alt="Perona" />
                </td>
                <td title="Absalom">
                  <img src="../images/devil fruits/paramecia/absalom.webp" alt="Absalom" />
                </td>
                <td title="Bartholomew Kuma">
                  <img src="../images/devil fruits/paramecia/kuma.webp" alt="Bartholomew Kuma" />
                </td>
              </tr>
              <tr>
                <th><a href="#">Yomi Yomi no Mi</a></th>
                <th><a href="#">Kage Kage no Mi</a></th>
                <th><a href="#">Horo Horo no Mi</a></th>
                <th><a href="#">Suke Suke no Mi</a></th>
                <th><a href="#">Nikyu Nikyu no Mi</a></th>
              </tr>
            </tbody>
          </table>
        </div>

        <div id="zoan" class="tabcontent">
          <div class="grid grid--2-cols tab-fruits">
            <div class="fruits-text">
              <p>
                Zoan (動物系ゾオン, Zōn) traduit littéralement par "Système
                Animal" (Dōbutsukē) est un type de Fruit du Démon qui permet à
                son utilisateur de se transformer en animal ou en une créature
                hybride (moitié espèce animale et moitié espèce de
                l'utilisateur, souvent humain) à volonté. Ce type de fruit
                donne souvent un avantage dans les combats au corps à corps.
                Le terme a été utilisé pour la première fois lorsque Dalton a
                fait usage de son fruit du démon pour combattre Wapol.
              </p>
              <div class="zoan-caract">
                <h2>Caractéristiques</h2>
                <p>
                  Un fruit de type Zoan permet à son utilisateur de se
                  transformer en un animal particulier (humain compris comme
                  Tony Tony Chopper ou Sengoku). Ce type de fruit donne accès
                  à trois formes : la forme naturelle de l'utilisateur (人型,
                  Hito-gata, signifiant littéralement "Forme humaine"), une
                  forme animale complète (獣型, Kemono-gata, signifiant
                  littéralement "Forme bestiale"), et une forme hybride
                  (人獣型, Jinjū-gata, signifiant <span class="show-only-query">littéralement "Forme humaine-bestiale"), combinant à la fois la
                    forme originelle et animale. Comme les autres Fruits du Démon,
                    une forme éveillée (覚醒, Kakusei, signifiant "Éveil") existe.
                    Cependant, grâce à de l'entraînement ou de la recherche, il est
                    possible pour les utilisateurs de Zoan de débloquer différentes
                    transformations : par exemple, Marco peut transformer uniquement
                    certaines parties de son corps,[4][5] Chopper peut se
                    transformer en près de dix formes distinctes, certaines sans
                    l'utilisation d'un Rumble Ball depuis l'ellipse,[6][7] Rob Lucci
                    arrive grâce à la technique Résurrection à se transformer en une
                    autre forme plus fine et plus rapide que sa forme hybride.</span>
                </p>
              </div>
            </div>

            <div class="fruits-card">
              <h2 class="fruits-card_heading">Zoan</h2>
              <p class="fruits-descr">
                Fruits du démon - Paramecia - <span>Zoan</span> - Logia
              </p>
              <img class="fruits-img" src="../images/devil fruits/zoan-illustration.webp" alt="Image représentant les fruits du démon" />
              <p class="fruits-information">Informations</p>
              <div class="card-table">
                <div class="line-table">
                  <p class="line-title">Nom Japonais:</p>
                  <p class="line-name font-size--11">動物系ゾオン</p>
                </div>
                <div class="line-table">
                  <p class="line-title">Nom Romanisé:</p>
                  <p class="line-name">Zōn</p>
                </div>
                <div class="line-table">
                  <p class="line-title">Nom Français:</p>
                  <p class="line-name">Zoan</p>
                </div>
                <div class="line-table">
                  <p class="line-title">Signifiant:</p>
                  <p class="line-name">Système Animal</p>
                </div>
                <div class="line-table">
                  <p class="line-title">Première utilisation:</p>
                  <p class="line-name">Chapitre 132, Épisode 80</p>
                </div>
                <div class="line-table">
                  <p class="line-title">Type:</p>
                  <p class="line-name">Zoan</p>
                </div>
                <div class="line-table">
                  <p class="line-title">Utilisateur Actuel:</p>
                  <p class="line-name">Personnes et objets divers</p>
                </div>
              </div>
            </div>
          </div>

          <div class="fruits-text-2 no-margin-top">
            <p>
              littéralement "Forme humaine-bestiale"), combinant à la fois la
              forme originelle et animale. Comme les autres Fruits du Démon,
              une forme éveillée (覚醒, Kakusei, signifiant "Éveil") existe.
              Cependant, grâce à de l'entraînement ou de la recherche, il est
              possible pour les utilisateurs de Zoan de débloquer différentes
              transformations : par exemple, Marco peut transformer uniquement
              certaines parties de son corps,[4][5] Chopper peut se
              transformer en près de dix formes distinctes, certaines sans
              l'utilisation d'un Rumble Ball depuis l'ellipse,[6][7] Rob Lucci
              arrive grâce à la technique Résurrection à se transformer en une
              autre forme plus fine et plus rapide que sa forme hybride.
            </p>
          </div>

          <div class="table-heading">
            <h3>Liste de Fruits Zoan connus</h3>
            <small class="fruit-no-illustration">La liste suivante comporte tous les Fruits du Démon de type
              Zoan par ordre de manifestation.<br>(Certains n'ont pas de visuel)</small>
          </div>

          <table class="table-zoan">
            <thead>
              <tr>
                <th class="th-heading" colspan="5">
                  Zoan et leurs utilisateurs
                </th>
              </tr>
            </thead>
            <tbody>
              <th colspan="5">Zoan naturel</th>
              <tr>
                <td title="Dalton">
                  <img src="../images/devil fruits/zoan/dalton.webp" alt="Dalton" />
                  <img class="hidden-img" src="../images/devil fruits/zoan/ushi-bison.webp" alt="Ushi Ushi no Mi, modèle Bison" />
                </td>
                <td title="Tony Tony Chopper">
                  <img src="../images/devil fruits/zoan/chopper.webp" alt="Tony Tony Chopper" />
                  <img class="hidden-img" src="../images/devil fruits/zoan/hito.webp" alt="Hito Hito no Mi" />
                </td>
                <td title="Pell">
                  <img src="../images/devil fruits/zoan/pell.webp" alt="Pell" />
                </td>

                <td title="Drophy, Miss Merry Christmas">
                  <img src="../images/devil fruits/zoan/drophy.webp" alt="Miss Merry Christmas" />
                </td>
                <td title="Lassou">
                  <img src="../images/devil fruits/zoan/lassou.webp" alt="Lassou" />
                </td>
              </tr>
              <tr>
                <th><a href="#">Ushi Ushi no Mi, modèle Bison</a></th>
                <th><a href="#">Hito Hito no Mi</a></th>
                <th><a href="#">Tori Tori no Mi, modèle Faucon</a></th>
                <th><a href="#">Mogu Mogu no Mi</a></th>
                <th><a href="#">Inu Inu no Mi, modèle Basset</a></th>
              </tr>

              <tr>
                <td title="Chaka">
                  <img src="../images/devil fruits/zoan/chaka.webp" alt="Chaka" />
                </td>
                <td title="Pierre">
                  <img src="../images/devil fruits/zoan/pierre.webp" alt="Pierre" />
                </td>
                <td title="Funkfreed">
                  <img src="../images/devil fruits/zoan/funkfreed.webp" alt="Funkfreed" />
                </td>
                <td title="Rob Lucci">
                  <img src="../images/devil fruits/zoan/lucci.webp" alt="Rob lucci" />
                </td>
                <td title="Jabura">
                  <img src="../images/devil fruits/zoan/jabura.webp" alt="Jabura" />
                </td>
              </tr>
              <tr>
                <th><a href="#">Inu Inu no Mi, modèle Chacal</a></th>
                <th><a href="#">Uma Uma no Mi</a></th>
                <th><a href="#">Zo Zo no Mi</a></th>
                <th><a href="#">Neko Neko no Mi, modèle Léopard</a></th>
                <th><a href="#">Inu Inu no Mi, modèle Loup</a></th>
              </tr>

              <tr>
                <td title="Kaku">
                  <img src="../images/devil fruits/zoan/kaku.webp" alt="Kaku" />
                  <img class="hidden-img" src="../images/devil fruits/zoan/ushi-girafe.webp" alt="Ushi Ushi no Mi, modèle Girafe" />
                </td>
                <td title="Boa Sandersonia">
                  <img src="../images/devil fruits/zoan/sandersonia.webp" alt="Boa Sandersonia" />
                </td>
                <td title="Boa Marigold">
                  <img src="../images/devil fruits/zoan/marigold.webp" alt="Boa Marigold" />
                </td>
                <td title="Minotaure">
                  <img src="../images/devil fruits/zoan/minotaure.webp" alt="Minotaure" />
                </td>
                <td title="Minorhinocéros">
                  <img src="../images/devil fruits/zoan/minorhinoceros.webp" alt="Minorhinocéros" />
                </td>
              </tr>
              <tr>
                <th><a href="#">Ushi Ushi no Mi, modèle Girafe</a></th>
                <th><a href="#">Hebi Hebi no Mi, modèle Anaconda</a></th>
                <th><a href="#">Hebi Hebi no Mi, modèle Cobra Royal</a></th>
                <th>
                  <p>Fruit du Minotaure</p>
                </th>
                <th>
                  <p>Fruit du Minorhinocéros</p>
                </th>
              </tr>

              <tr>
                <td title="Minozèbre">
                  <img src="../images/devil fruits/zoan/minozebre.webp" alt="Minozèbre" />
                </td>
                <td title="Minokoala">
                  <img src="../images/devil fruits/zoan/minokoala.webp" alt="Minokoala" />
                </td>
                <td title="Onigumo">
                  <img src="../images/devil fruits/zoan/onigumo.webp" alt="Onigumo" />
                </td>
                <td title="Dalmatien">
                  <img src="../images/devil fruits/zoan/dalmatien.webp" alt="Dalmatien" />
                </td>
                <td title="Epoida">
                  <img src="../images/devil fruits/zoan/epoida.webp" alt="Epoida" />
                </td>
              </tr>
              <tr>
                <th><a href="#">Fruit du Minozèbre</a></th>
                <th><a href="#">Fruit du Minokoala</a></th>
                <th><a href="#">Fruit de Onigumo</a></th>
                <th><a href="#">Fruit de Dalmatien</a></th>
                <th><a href="#">Fruit d'Epoida</a></th>
              </tr>

              <tr>
                <td title="Pekoms">
                  <img src="../images/devil fruits/zoan/pekoms.webp" alt="Pekoms" />
                </td>
                <td title="Tamago">
                  <img src="../images/devil fruits/zoan/tamago.webp" alt="Tamago" />
                </td>
                <td title="Minochihuahua">
                  <img src="../images/devil fruits/zoan/minochihuahua.webp" alt="Minochihuahua" />
                </td>
                <td title="Smiley">
                  <img src="../images/devil fruits/zoan/smiley.webp" alt="Smiley" />
                  <img class="hidden-img" src="../images/devil fruits/zoan/sara.webp" alt="Sara Sara no Mi" />
                </td>
                <td title="Kabu">
                  <img src="../images/devil fruits/zoan/kabu.webp" alt="Kabu" />
                </td>
              </tr>
              <tr>
                <th><a href="#">Kame Kame no Mi</a></th>
                <th><a href="#">Tama Tama no Mi</a></th>
                <th>
                  <p>Fruit du Minochihuahua</p>
                </th>
                <th>
                  <a href="#">Sara Sara no Mi, modèle Axolotl (Décédé)</a>
                </th>
                <th>
                  <a href="#">Mushi Mushi no Mi, modèle Scarabée Rhinocéros</a>
                </th>
              </tr>

              <tr>
                <td title="Bee Anne">
                  <img src="../images/devil fruits/zoan/beeAnne.webp" alt="Bee Anne" />
                </td>
                <td title="Morgans">
                  <img src="../images/devil fruits/zoan/morgans.webp" alt="Morgans" />
                </td>
                <td title="Bunbuku">
                  <img src="../images/devil fruits/zoan/bunbuku.webp" alt="Bunbuku" />
                </td>
              </tr>
              <tr>
                <th><a href="#">Mushi Mushi no Mi, modèle Abeille</a></th>
                <th><a href="#">Tori Tori no Mi, Modèle Albatros</a></th>
                <th><a href="#">Inu Inu no Mi, modèle Tanuki</a></th>
              </tr>

              <th colspan="5">Zoan Antique</th>
              <tr></tr>
              <tr>
                <td title="X Drake">
                  <img src="../images/devil fruits/zoan/xdrake.webp" alt="X Drake" />
                </td>
                <td title="Jack">
                  <img src="../images/devil fruits/zoan/jack.webp" alt="Jack" />
                </td>
                <td title="Page One">
                  <img src="../images/devil fruits/zoan/pageOne.webp" alt="Page One" />
                </td>
                <td title="Alber, King">
                  <img src="../images/devil fruits/zoan/king.webp" alt="Alber, King" />
                </td>
                <td title="Queen">
                  <img src="../images/devil fruits/zoan/queen.webp" alt="Queen" />
                </td>
              </tr>
              <tr>
                <th><a href="#">Ryu Ryu no Mi, modèle Allosaure</a></th>
                <th><a href="#">Zo Zo no Mi, modèle Mammouth</a></th>
                <th><a href="#">Ryu Ryu no Mi, modèle Spinosaure</a></th>
                <th><a href="#">Ryu Ryu no Mi, modèle Ptéranodon</a></th>
                <th><a href="#">Ryu Ryu no Mi, modèle Brachiosaure</a></th>
              </tr>

              <tr></tr>
              <tr>
                <td title="Ulti">
                  <img src="../images/devil fruits/zoan/ulti.webp" alt="ulti" />
                </td>
                <td title="Sasaki">
                  <img src="../images/devil fruits/zoan/sasaki.webp" alt="Sasaki" />
                </td>
                <td title="Black Maria">
                  <img src="../images/devil fruits/zoan/blackMaria.webp" alt="Black Maria" />
                </td>
                <td title="Who's-Who">
                  <img src="../images/devil fruits/zoan/whoswho.webp" alt="Who's-Who" />
                </td>
              </tr>
              <tr>
                <th>
                  <a href="#">Ryu Ryu no Mi, modèle <small>Pachycéphalosaure</small></a>
                </th>
                <th><a href="#">Ryu Ryu no Mi, modèle Tricératops</a></th>
                <th>
                  <a href="#">Kumo Kumo no Mi, modèle Rosamygale grauvogeli</a>
                </th>
                <th>
                  <a href="#">Neko Neko no Mi, modèle Tigre à dents de sabre</a>
                </th>
              </tr>
              <th colspan="5">Zoan Mythique</th>
              <tr></tr>
              <th colspan="5">Fruits Artificiels</th>
              <tr></tr>
              <th colspan="5">Fruit du Démon Artificiel</th>
              <tr></tr>
              <th colspan="5">Zoan Smile</th>
            </tbody>
          </table>
        </div>

        <div id="logia" class="tabcontent">
          <div class="grid grid--2-cols tab-fruits">
            <div class="fruits-text">
              <p>
                Logia (自然系ロギア, Rogia), traduit littéralement par
                "Système Nature" (Shizenkē), est un type de Fruit du Démon. Il
                est caractérisé par le fait qu'il donne à son utilisateur le
                pouvoir de prendre la forme d'un élément naturel, de le
                produire et le contrôler à volonté. Les Fruits du Démon de
                type Logia sont considérés comme étant les plus puissants des
                différents types de Fruits du Démon ainsi que les plus rares
                (si l'on exclut les Fruits du Démon de type Zoan Mythique).[2]
                Le terme Logia a été utilisé pour la première fois par Laki au
                sujet du Fruit du Démon d'Ener.
              </p>
              <div class="logia-forces">
                <h2>Forces</h2>
                <p>
                  Forts de leurs rares défauts, les utilisateurs des fruits de
                  type Logia sont quasi-invincibles. L'utilisateur peut
                  produire, devenir et contrôler à volonté un élément naturel.
                  Les attaques physiques normales deviennent inopérantes : les
                  balles, armes, coups de poings, de pieds, etc. passent à
                  travers leur corps.
                  <span class="show-only-query">Sans Fluide, impossible de les toucher, excepté dans le cas de
                    Logias constitués d'éléments solides, comme Aokiji, dont
                    l'élément est la glace. Les utilisateurs de tels Fruits
                    utilisent notamment cet avantage pour imposer leur supériorité à
                    l'image d'Ener qui laisse cinq minutes à ses adversaires pour le
                    tuer sans qu'il ne bouge d'un pouce et sans qu'il ne se défende,
                    son corps de foudre le protégeant.</span>
                </p>
              </div>
            </div>

            <div class="fruits-card">
              <h2 class="fruits-card_heading">Logia</h2>
              <p class="fruits-descr">
                Fruits du démon - Paramecia - Zoan - <span>Logia</span>
              </p>
              <img class="fruits-img" src="../images/devil fruits/logia-illustration.webp" alt="Image représentant les fruits du démon" />
              <p class="fruits-information">Informations</p>
              <div class="card-table">
                <div class="line-table">
                  <p class="line-title">Nom Japonais:</p>
                  <p class="line-name font-size--11">自然系ロギア</p>
                </div>
                <div class="line-table">
                  <p class="line-title">Nom Romanisé:</p>
                  <p class="line-name">Rogia</p>
                </div>
                <div class="line-table">
                  <p class="line-title">Nom Français:</p>
                  <p class="line-name">Logia</p>
                </div>
                <div class="line-table">
                  <p class="line-title">Signifiant:</p>
                  <p class="line-name">Système Nature</p>
                </div>
                <div class="line-table">
                  <p class="line-title">Première utilisation:</p>
                  <p class="line-name">Chapitre 97, Épisode 48</p>
                </div>
                <div class="line-table">
                  <p class="line-title">Type:</p>
                  <p class="line-name">Logia</p>
                </div>
                <div class="line-table">
                  <p class="line-title">Utilisateur Actuel:</p>
                  <p class="line-name">Personnes et objets divers</p>
                </div>
              </div>
            </div>
          </div>
          <div class="fruits-text-2 no-margin-top">
            <p>
              Sans Fluide, impossible de les toucher, excepté dans le cas de
              Logias constitués d'éléments solides, comme Aokiji, dont
              l'élément est la glace. Les utilisateurs de tels Fruits
              utilisent notamment cet avantage pour imposer leur supériorité à
              l'image d'Ener qui laisse cinq minutes à ses adversaires pour le
              tuer sans qu'il ne bouge d'un pouce et sans qu'il ne se défende,
              son corps de foudre le protégeant.
            </p>
          </div>

          <div class="table-heading">
            <h3>Liste de Fruits Logia connus</h3>
            <small class="fruit-no-illustration">La liste suivante comporte tous les Fruits du Démon de type
              Logia par ordre de manifestation.<br>(Certains n'ont pas de visuel)</small>
          </div>

          <table class="table-logia">
            <thead>
              <tr>
                <th class="th-heading" colspan="5">
                  Logia et leurs utilisateurs
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td title="Smoker">
                  <img src="../images/devil fruits/logia/smoker.webp" alt="Smoker" />
                </td>

                <td title="Portgas D. Ace">
                  <img src="../images/devil fruits/logia/ace.webp" alt="Portgas D. Ace" />

                  <img class="hidden-img" src="../images/devil fruits/logia/mera.webp" alt="Mera Mera no Mi" />
                </td>
                <td title="Crocodile">
                  <img src="../images/devil fruits/logia/crocodile.webp" alt="Crocodile" />

                  <img class="hidden-img" src="../images/devil fruits/logia/suna.webp" alt="Suna Suna no Mi" />
                </td>
                <td title="Enel / Ener">
                  <img src="../images/devil fruits/logia/enel.webp" alt="Enel / Ener" />
                </td>
                <td title="Kuzan, Aokiji">
                  <img src="../images/devil fruits/logia/kuzan.webp" alt="Kuzan, Aokiji" />
                </td>
              </tr>
              <tr>
                <th><a href="#">Moku Moku no Mi</a></th>
                <th><a href="#">Mera Mera no Mi (anciennement)</a></th>
                <th><a href="#">Suna Suna no Mi</a></th>
                <th><a href="#">Goro Goro no Mi</a></th>
                <th><a href="#">Hie Hie no Mi</a></th>
              </tr>

              <tr>
                <td title="Marshall D. Teach, Barbe Noire">
                  <img src="../images/devil fruits/logia/teach.webp" alt="Marshall D. Teach, Barbe Noire" />

                  <img class="hidden-img" src="../images/devil fruits/logia/yami.webp" alt="Yami Yami no Mi" />
                </td>
                <td title="Borsalino, Kizaru">
                  <img src="../images/devil fruits/logia/kizaru.webp" alt="Borsalino, Kizaru" />
                </td>
                <td title="Sakazuki, Akainu">
                  <img src="../images/devil fruits/logia/akainu.webp" alt="Sakazuki, Akainu" />
                </td>
                <td title="Caribou">
                  <img src="../images/devil fruits/logia/caribou.webp" alt="Caribou" />
                </td>
                <td title="César Clown">
                  <img src="../images/devil fruits/logia/cesar.webp" alt="César Clown" />
                </td>
              </tr>
              <tr>
                <th><a href="#">Yami Yami no Mi</a></th>
                <th><a href="#">Pika Pika no Mi</a></th>
                <th><a href="#">Magu Magu no Mi</a></th>
                <th><a href="#">Numa Numa no Mi</a></th>
                <th><a href="#">Gasu Gasu no Mi</a></th>
              </tr>

              <tr>
                <td title="Monet (anciennement)">
                  <img src="../images/devil fruits/logia/monet.webp" alt="Monet" />
                </td>
                <td title="Sabo">
                  <img src="../images/devil fruits/logia/sabo.webp" alt="Sabo" />

                  <img class="hidden-img" src="../images/devil fruits/logia/mera.webp" alt="Mera Mera no Mi" />
                </td>
                <td title="Aramaki, Ryokugyû">
                  <img src="../images/devil fruits/logia/aramaki.webp" alt="Aramaki, Ryokugyû" />
                </td>
              </tr>
              <tr>
                <th><a href="#">Yuki Yuki no Mi</a></th>
                <th><a href="#">Mera Mera no Mi (actuel)</a></th>
                <th><a href="#">Mori Mori no Mi</a></th>
              </tr>
            </tbody>
          </table>
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
            <a href="#" target="_blank">
              <li>Hito Hito no Mi</li>
            </a>
            <a href="#">
              <li>Yami Yami no Mi</li>
            </a>
            <a href="#">
              <li>Mera Mera no Mi</li>
            </a>
            <a href="#">
              <li>Goro Goro no Mi</li>
            </a>
            <a href="#" target="_blank">
              <li>Tori Tori no Mi</li>
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