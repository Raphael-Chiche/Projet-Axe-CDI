<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/style/style.css" />
  <title>Réseau Social</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,200;0,300;0,400;1,200;1,300;1,400&display=swap" rel="stylesheet" />
</head>

<body id="body">
  <div class="navbar">Music Chat</div>
  <div class="conteneur">
    <button class="floating-btn">
      <img src="assets/image/plus.png" alt="Pop-up" />
    </button>




    <div class="actu">
      <?php
      require_once "php/connec.php";


      $requete = $database->prepare("SELECT * FROM chats ORDER BY date DESC");
      $requete->execute();
      $chats = $requete->fetchAll(PDO::FETCH_ASSOC);

      ?>
      <div>


        <?php foreach ($chats as $chat) { ?>
          <div class="<?php echo $chat["theme"] ?> tweet poubelle">

            <div class="info colorFond">
              <div class="boxsChat">
                <img src="assets/image/profilPictur.png" class="imgprofil" alt="Profil Picture" />
              </div>
              <div class="infoTexte colorFond">
                <h3 class="colorFond">Rap Exemple1</h3>
                <h4 class="colorFond">@RapGenius</h4>
              </div>
            </div>
            <div class="contenueTweet">

              <p class="colorFond">
                <?php echo $chat["contenu"]; ?>
              </p>


              <?php if ($chat['image']) {
                echo "<img src='assets/imgTweet/" . $chat['image'] . "' alt='Image Tweet' class='sizeImg'>";
              } ?>


              <span>
                <?php echo $chat["date"]; ?>
              </span>



              <img src="assets/image/icons8-poubelle-24.png" alt="Supprimer" class="deleteChat" />
            </div>
          </div>
        <?php
        }
        ?>
      </div>

      <div class="tagRestart">
        <div class="divInfo">
          <div class="formeInfo">
            <a href="html/connexion.php" class="parametre">
              <img src="assets/image/profil.png" alt="Profil" />
              <p>Profil</p>
            </a>
          </div>

          <div class="formeInfo">
            <img src="assets/image/ajouter.png" alt="Ajouter" class="ajouter1" />
            <p>Ajouter</p>
          </div>

          <div class="formeInfo">
            <img src="assets/image/messagePrivé.png" alt="chat" />
            <p>Message privé</p>
          </div>

          <div class="formeInfo">
            <a href="html/parametre.html" class="parametre"><img src="assets/image/parametre.png" alt="parametre" />
              <p>Parametre</p>
            </a>
          </div>
        </div>
        <div class="div_tag">
          <h3 style="color: var(--blackpurple)">Catégories</h3>
          <div class="Rap">
            <div class="boxs cat1"></div>
            <p>Rap</p>
          </div>

          <div class="Kpop">
            <div class="boxs cat2"></div>
            <p>K-pop</p>
          </div>

          <div class="Classique">
            <div class="boxs cat3"></div>
            <p>Classique</p>
          </div>

          <div class="Electro">
            <div class="boxs cat4"></div>
            <p>Electronique</p>
          </div>

          <div class="Jazz">
            <div class="boxs cat5"></div>
            <p>Jazz</p>
          </div>

          <div class="Rock">
            <div class="boxs cat6"></div>
            <p>Rock</p>
          </div>

          <div class="Metal">
            <div class="boxs cat7"></div>
            <p>Metal</p>
          </div>

          <div class="Pop">
            <div class="boxs cat8"></div>
            <p>Pop</p>
          </div>

          <div class="Funk">
            <div class="boxs cat9"></div>
            <p>Funk</p>
          </div>

          <div class="Country">
            <div class="boxs cat10"></div>
            <p>Country</p>
          </div>

          <!-- <ol>
                <li class="divertissement couleur1">Divertissement</li>
                <li class="sport couleur2">Sport</li>
                <li class="musique couleur3">Musique</li>
                <li class="series couleur4">Series</li>
                <li class="manga couleur5">Manga</li>
                <li class="couleur6">blablba</li>
                <li class="couleur7">blablba</li>
                <li class="couleur8">blablba</li>
                <li class="couleur9">blablba</li>
                <li class="couleur10">blablba</li>
            </ol> -->
        </div>
        <div class="reset formeInfo">
          <img src="assets/image/reset.png" alt="Reset" />
          <p class="reset">Restart</p>
        </div>
      </div>
    </div>

    <!-- Pop Up -->

    <div class="popup">
      <div class="dispoNouveauChat">
        <div class=" nouveauChat">
          <div class="">
            <form action="php/inserer.php" method="POST" enctype="multipart/form-data">
              <label for="contenu">Contenu :</label>
              <br>
              <textarea name="contenu" id="contenu" class="contenu" maxlength="300" cols="50"></textarea>
              <br>
              <input type="file" name="image" id="image" accept=".jpg, .gif, .png">

              <br>
              <label for="theme">Choisir un theme:</label>

              <select name="theme" id="choixTheme">
                <option value="">--Choix--</option>
                <option value="chatRap">Rap</option>
                <option value="chatKpop">Kpop</option>
                <option value="chatElectro">Electro</option>
                <option value="chatClassique">Classique</option>
                <option value="chatJazz">Jazz</option>
                <option value="chatRock">Rock</option>
                <option value="chatMetal">Metal</option>
                <option value="chatPop">Pop</option>
                <option value="chatFunk">Funk</option>
              </select>

              <input type="submit" value="Envoyer" class="envoyerChat">

            </form>
            <div class="dispoBoutons">

              <button class="annulerChat">Annuler</button>
            </div>
          </div>
        </div>



      </div>

    </div>


    <div class="popupSupprimer visible">
      <div class="validator">
        <p>Êtes-vous sûr de vouloir supprimer le chat?</p>
      </div>
      <div class="dispoBoutons">
      <a href="php/supprimer.php?id=<?php echo $chat["id"]; ?>"><button class="validerDelete">Supprimer</button></a>
        <button class="annulerDelete">Annuler</button>
      </div>
    </div>

    <div class="sidebar">
      <div class="toggle-btn">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <h3>Menu</h3>
      <div class="formeInfo">
        <a href="html/connexion.php" class="parametre">
          <img src="assets/image/profil.png" alt="Profil" />
          <p>Profil</p>
        </a>
      </div>

      <div class="formeInfo">
        <img src="assets/image/ajouter.png" alt="Ajouter" class="ajouter1" />
        <p>Ajouter</p>
      </div>

      <div class="formeInfo">
        <img src="assets/image/messagePrivé.png" alt="chat" />
        <p>Message privé</p>
      </div>

      <div class="formeInfo">
        <a style="color: white" href="html/parametre.html" class="parametre"><img src="assets/image/parametre.png" alt="parametre" />
          <p>Parametre</p>
        </a>
      </div>

      <div class="sidenavCategorie">
        <h3>Catégories</h3>
        <div class="Rap sidenavCategories">
          <div class="boxs cat1"></div>
          <p>Rap</p>
        </div>

        <div class="Kpop sidenavCategories">
          <div class="boxs cat2"></div>
          <p>K-pop</p>
        </div>

        <div class="Classique sidenavCategories">
          <div class="boxs cat3"></div>
          <p>Classique</p>
        </div>

        <div class="Electro sidenavCategories">
          <div class="boxs cat4"></div>
          <p>Electronique</p>
        </div>

        <div class="Jazz sidenavCategories">
          <div class="boxs cat5"></div>
          <p>Jazz</p>
        </div>

        <div class="Rock sidenavCategories">
          <div class="boxs cat6"></div>
          <p>Rock</p>
        </div>

        <div class="Metal sidenavCategories">
          <div class="boxs cat7"></div>
          <p>Metal</p>
        </div>

        <div class="Pop sidenavCategories">
          <div class="boxs cat8"></div>
          <p>Pop</p>
        </div>

        <div class="Funk sidenavCategories">
          <div class="boxs cat9"></div>
          <p>Funk</p>
        </div>

        <div class="Country sidenavCategories">
          <div class="boxs cat10"></div>
          <p>Country</p>
        </div>
      </div>
      <div class="reset formeInfo">
        <img src="assets/image/reset.png" alt="Reset" />
        <p class="reset">Restart</p>
      </div>
    </div>

    <!-- <script src="assets/javascript/java.js"></script> -->
    <script src="assets/javascript/categorie.js"></script>
    <script src="assets/javascript/popup.js"></script>
    <script src="assets/javascript/floupagescroll.js"></script>
    <script src="assets/javascript/supprimerChat.js"></script>

    <script src="assets/javascript/main.js"></script>
  </div>
</body>

</html>