<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link rel="stylesheet" href="../assets/style/style.css" />
  <title>Réseau Social</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,200;0,300;0,400;1,200;1,300;1,400&display=swap" rel="stylesheet" />
</head>

<body id="body">

  <a href="../index.php" class="text-decoration-none">
    <div class="d-flex justify-content-center navbarTitle">Music Chat</div>
  </a>
  <div>
    <div id="choix_formulaires">
      <div class="d-flex justify-content-evenly align-items-center">
        <?php
        if (!isset($_SESSION["id"])) {
        ?>
          <button type="button" class="btn btn-success btn-lg rounded-pill">
            Connexion
          </button>

          <button type="button" class="btn btn-light btn-lg rounded-pill">
            Inscription
          </button>
        <?php
        } else {
        ?>
          <a href="../php/decoUser.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">
            Deconnexion
          </a>
        <?php
        }
        ?>
      </div>
    </div>
    <div class="d-flex flex-column align-items-center">

      <div id="connectionDisplay" class="col border rounded  p-3 bg-success bg-gradient">
        <h5><u>Connexion</u></h5>
        <br/>

        <form method="POST" action="../php/ConnexionUser.php">
          <div class="mb-2">
            <label  class="form-label">Adresse mail</label>
            <input type="email" class="form-control" id="mail"  name="email" />
          </div>

          <div class="mb-2">
            <label  class="form-label">Mot de passse</label>
            <input type="password" class="form-control" id="password" name="password" />
          </div>

          <button type="submit" name="SendCo" class="btnEnvoyerConnexion btn btn-primary">Envoyer</button>
        </form>
      </div>
      <div id="inscriptionDisplay" class="col border rounded p-3 bg-success bg-gradient">
        <h5>Inscription</h5>
        <br/>
        <form action="../php/InscriptionUser.php" method="POST">
          <div class="mb-3">
            <label for="pseudo" class="form-label">Pseudo</label>
            <input type="text" class="form-control" name="pseudo" id="pseudo" />
          </div>


          <div class="mb-3">
            <label for="mail" class="form-label">Adresse mail</label>
            <input type="email" class="form-control" name="mail" id="mail"/>
          </div>



          <div class="mb-3">
            <label for="password" class="form-label">Mot de passse</label>
            <input type="password" class="form-control" name="password" id="password" />
          </div>
          <button type="submit" name="SendInsc" class="btnEnvoyerConnexion btn btn-primary">Envoyer</button>
        </form>
      </div>

    </div>
  </div>

  <script src="../assets/javascript/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="../assets/javascript/connexion.js"></script>
</body>

</html>