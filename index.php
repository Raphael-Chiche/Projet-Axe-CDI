<?php session_start();
// echo $_SESSION["id"];
// echo $_SESSION["pseudo"];


?>
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
  <link
    href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,200;0,300;0,400;1,200;1,300;1,400&display=swap"
    rel="stylesheet" />
</head>

<body id="body">
  <div class="navbar">

    <div class="formeInfo navClick">
      <a href="html/parametre.html" class="parametre"><img src="assets/image/para.svg" alt="parametre" />
      </a>
    </div>
    <a href="index.php">
      <p class="navbarTitle">Music Chat</p>
    </a>
    <div class="connexProfil">
      <div class="formeInfo">
        <a href="html/connexion.php" class="parametre">
          <img src="assets/image/connexion.png" alt="Profil" />
        </a>
      </div>
      <?php
      if (isset($_SESSION["id"])) {
        ?>
        <div class="formeInfo">
          <a href="html/profil.php" class="parametre">
            <img src="assets/image/user.png" alt="Profil" />
          </a>
        </div>

        <?php
      }
      ?>
    </div>
  </div>

  <main class="conteneur">

    <button class="floating-btn">
      <img src="assets/image/plus.png" alt="Pop-up" />
    </button>

    <article class="actu">
      <?php
      require_once "php/connec.php";


      $requete = $database->prepare("SELECT * FROM chats ORDER BY date DESC");
      $requete->execute();
      $chats = $requete->fetchAll(PDO::FETCH_ASSOC);
      ?>
      <div class="tweetStyle">


        <?php foreach ($chats as $chat) { ?>
          <div class="<?php echo $chat["theme"] ?> tweet poubelle" catTweet="<?php echo $chat["theme"] ?>">

            <div class="info colorFond">
              <div class="boxsChat">
                <img src="assets/image/profilPictur.png" class="imgprofil" alt="Profil Picture" />
              </div>
              <div class="infoTexte colorFond">
                <h3 class="colorFond">
                  <?php echo $chat["pseudoChat"]; ?>
                </h3>
                <h4 class="colorFond">@
                  <?php echo $chat["pseudoChat"]; ?>
                </h4>
              </div>
            </div>
            <div class="contenueTweet">
              <p class="colorFond">
                <?php echo $chat["contenu"]; ?>
              </p>


              <?php if ($chat['image']) {
                echo "<img src='assets/imgTweet/" . $chat['image'] . "' alt='Image Tweet' class='sizeImg'>";
              } ?>

              <div class="infoID">
                <span>
                  <?php echo $chat["date"]; ?>

                </span>
                <p class="RecupCat">
                  <?php echo $chat["theme"] ?>
                </p>
                <?php

                if (isset($_SESSION["id"]) && $chat["userId"] === $_SESSION["id"]) {
                  ?>
                  <img src="assets/image/icons8-poubelle-24.png" alt="Supprimer" class="deleteChat" />
                  <?php
                } else {
                }
                ?>
                <div class="popupSupprimer visible">
                  <div class="validator">
                    <p>Êtes-vous sûr de vouloir supprimer le chat?</p>
                  </div>
                  <div class="dispoBoutons">
                    <a href="php/supprimer.php?id=<?php echo $chat["id"]; ?>" class="validerDelete">Supprimer</a>
                    <button class="annulerDelete">Annuler</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
        }
        ?>
      </div>

      <div class="tagRestart">



        <div class="div_tag">
          <h3>Catégories</h3>


          <button onclick="Categories('chatRap')" class="Rap"> Rap </button>
          <button onclick="Categories('chatKpop')" class="Kpop"> Kpop </button>
          <button onclick="Categories('chatClassique')" class="Classique"> Classique </button>
          <button onclick="Categories('chatElectro')" class="Electro"> Electronique </button>
          <button onclick="Categories('chatJazz')" class="Jazz"> Jazz </button>
          <button onclick="Categories('chatRock')" class="Rock"> Rock </button>
          <button onclick="Categories('chatMetal')" class="Metal"> Metal </button>
          <button onclick="Categories('chatPop')" class="Pop"> Pop </button>
          <button onclick="Categories('chatFunk')" class="Funk"> Funk </button>
          <button onclick="Categories('chatCountry')" class="Country"> Country </button>
          <button onclick="Reset()" class="ResetCat">Reset</button>

          <!-- <div class="Rap">
                <div class="boxs cat1"></div>
                <p class="txtRap">Rap</p>
            </div>

          <div class="Kpop">
            <div class="boxs cat2"></div>
            <p class="txtKpop">K-pop</p>
          </div>

          <div class="Classique">
            <div class="boxs cat3"></div>
            <p class="txtClassique">Classique</p>
          </div>

          <div class="Electro">
            <div class="boxs cat4"></div>
            <p class="txtElectro">Electro</p>
          </div>

          <div class="Jazz">
            <div class="boxs cat5"></div>
            <p class="txtJazz">Jazz</p>
          </div>

          <div class="Rock">
            <div class="boxs cat6"></div>
            <p class="txtRock">Rock</p>
          </div>

          <div class="Metal">
            <div class="boxs cat7"></div>
            <p class="txtMetal">Metal</p>
          </div>

          <div class="Pop">
            <div class="boxs cat8"></div>
            <p class="txtPop">Pop</p>
          </div>

          <div class="Funk">
            <div class="boxs cat9"></div>
            <p class="txtFunk">Funk</p>
          </div>

          <div class="Country">
            <div class="boxs cat10"></div>
            <p class="txtCountry">Country</p>
          </div>

          <div class="reset formeInfo styleRestart resetbt">
            <img src="assets/image/reset.png" alt="Reset" />
            <p class="reset">Restart</p>
          </div> -->

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


      </div>
    </article>

    <!-- Pop Up -->

    <div class="popup">
      <div class="dispoNouveauChat">
        <div class=" nouveauChat">
          <div>
            <?php
            if (isset($_SESSION["id"])) {
              ?>
              <form action="php/inserer.php" method="POST" enctype="multipart/form-data" class="styleForm">
                <label for="contenu">Contenu :</label>
                <br>
                <textarea name="contenu" id="contenu" class="contenu" maxlength="300" cols="50"></textarea>
                <br>
                <input type="file" name="image" id="image" accept=".jpg, .gif, .png">

                <br>
                <label for="choixTheme">Choisir un theme:</label>

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
                  <option value="chatCountry">Country</option>
                </select>
                <div class="displayEnvoyer">
                  <input type="submit" value="Envoyer" class="envoyerChat">
                </div>
              </form>
              <div class="dispoBoutons">

                <button class="annulerChat">Annuler</button>
              </div>
              <?php
            } else {
              ?>
              <a href="html/connexion.php" class="styleConnexion">Connetez vous</a>

              <?php
            }

            ?>
          </div>
        </div>
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
          <img src="assets/image/connexion.png" alt="Profil" />
          <p class="linkColor">Connexion</p>
        </a>
      </div>
      <?php
      if (isset($_SESSION["id"])) {
        ?>
        <div class="formeInfo">
          <a href="html/profil.php" class="parametre">
            <img src="assets/image/user.png" alt="Profil" />
            <p class="linkColor">Profil</p>
          </a>
        </div>

        <?php
      }
      ?>


      <div class="formeInfo">
        <a href="html/parametre.html" class="parametre">
          <img src="assets/image/para.svg" alt="parametre" />
          <p class="linkColor">Parametre</p>
        </a>
      </div>

      <div class="sidenavCategorie">
        <button onclick="Categories('chatRap')" class="Rap"> Rap </button>
        <button onclick="Categories('chatKpop')" class="Kpop"> Kpop </button>
        <button onclick="Categories('chatClassique')" class="Classique"> Classique </button>
        <button onclick="Categories('chatElectro')" class="Electro"> Electronique </button>
        <button onclick="Categories('chatJazz')" class="Jazz"> Jazz </button>
        <button onclick="Categories('chatRock')" class="Rock"> Rock </button>
        <button onclick="Categories('chatMetal')" class="Metal"> Metal </button>
        <button onclick="Categories('chatPop')" class="Pop"> Pop </button>
        <button onclick="Categories('chatFunk')" class="Funk"> Funk </button>
        <button onclick="Categories('chatCountry')" class="Country"> Country </button>
        <button onclick="Reset()" class="ResetCat">Reset</button>

        <!-- <h3>Catégories</h3>
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
          <p>Electro</p>
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
        </div> -->
      </div>
      <!-- <div class="reset formeInfo styleRestart resetbtSidnav">
        <img src="assets/image/reset.png" alt="Reset" />
        <p class="reset">Restart</p>
      </div> -->
    </div>

    <!-- <script src="assets/javascript/java.js"></script> -->
    <script src="assets/javascript/categoriesTest.js"></script>
    <script src="assets/javascript/sidnav.js"></script>
    <script src="assets/javascript/supprimerChat.js"></script>
    <script src="assets/javascript/main.js"></script>
    <script src="assets/javascript/popup.js"></script>
    </main>
  <div class="flouInscription">
    <div class="txtPopupCo">
      Connectez-vous pour pouvoir voir plus de Chat !
    </div>
    <div>
      <a href="html/connexion.php" class="boutonConnexion"> Connectez-vous!</a>
    </div>
  </div>

  <?php
  if (!isset($_SESSION["id"])) { ?>
    <script src="assets/javascript/floupagescroll.js"></script>
    <script src="assets/javascript/BlurScroll.js"></script>
    <?php
  } else { ?>

    <script src="assets/javascript/localstorageTextarea.js"></script>

    <?php
  }
  ?>
</body>

</html>