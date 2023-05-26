<?php session_start();
// echo $_SESSION["id"];
// echo $_SESSION["pseudo"]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/style/style.css" />
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
            <a href="parametre.html"><img src="../assets/image/para.svg" alt="parametre" /></a>
        </div>
        <a href="../index.php">
            <p class="navbarTitle">Music Chat</p>
        </a>
        <div class="connexProfil">
            <div class="formeInfo">
                <a href="connexion.php" class="parametre">
                    <img src="../assets/image/connexion.png" alt="Profil" />
                </a>
            </div>
            <?php
            if (isset($_SESSION["id"])) {
                ?>
                <div class="formeInfo">
                    <a href="profil.php" class="parametre">
                        <img src="../assets/image/user.png" alt="Profil" />
                    </a>
                </div>

                <?php
            }
            ?>
        </div>
    </div>

    <?php if (isset($_GET["pseudo"])) { ?>
        <h2 class="Welcome">Bienvenu sur le profil de
            <?php echo $_GET["pseudo"] ?>
        </h2>

        <?php
    } else {
        ?>
        <h2 class="Welcome">Bienvenu sur votre profil,
            <?php echo $_SESSION["pseudo"] ?>
        </h2>
        <?php
    }
    ?>
    <div class="conteneur">




        <div class="actu">
            <?php
            require_once "../php/connec.php";


            $pseudo_profil = $_SESSION["id"];

            if (isset($_GET["pseudo"])) {
                $pseudo_search = $_GET["pseudo"];

                $jeRecherche = $database->prepare("SELECT * FROM chats WHERE pseudoChat LIKE '%$pseudo_search%' ORDER BY date DESC");
                $jeRecherche->execute();
                $chats = $jeRecherche->fetchAll(PDO::FETCH_ASSOC);
            } else {
                $jeRecherche = $database->prepare("SELECT * FROM chats WHERE userId LIKE '%$pseudo_profil%' ORDER BY date DESC");
                $jeRecherche->execute();
                $chats = $jeRecherche->fetchAll(PDO::FETCH_ASSOC);

            }


            ?>
            <div class="tweetStyle">


                <?php foreach ($chats as $chat) { ?>
                    <div class="<?php echo $chat["theme"] ?> tweet poubelle">

                        <div class="info colorFond">
                            <div class="boxsChat">
                                <img src="../assets/image/profilPictur.png" class="imgprofil" alt="Profil Picture" />
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
                                echo "<img src='../assets/imgTweet/" . $chat['image'] . "' alt='Image Tweet' class='sizeImg'>";
                            } ?>

                            <div class="infoID">
                                <span>
                                    <?php echo $chat["date"]; ?>

                                </span>
                                <br>
                                <p class="RecupCat">
                                    <?php echo $chat["theme"] ?>
                                </p>
                                <?php

                                if (isset($_SESSION["id"]) && $chat["userId"] === $_SESSION["id"]) {
                                    ?>
                                    <img style="width: 30px;" src="../assets/image/icons8-poubelle-24.png" alt="Supprimer"
                                        class="deleteChat" />
                                    <?php
                                } else {
                                }
                                ?>
                                <div class="popupSupprimer visible">
                                    <div class="validator">
                                        <p>Êtes-vous sûr de vouloir supprimer le chat?</p>
                                    </div>
                                    <div class="dispoBoutons">
                                        <a href="../php/supprimerProfil.php?id=<?php echo $chat["id"]; ?>"
                                            class="validerDelete">Supprimer</a>
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


        </div>

        <div class="sidebar">
            <div class="toggle-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <h3>Menu</h3>
            <div class="formeInfo">
                <a href="connexion.php" class="parametre">
                    <img src="../assets/image/connexion.png" alt="Profil" />
                    <p class="linkColor">Connexion</p>
                </a>
            </div>
            <?php
            if (isset($_SESSION["id"])) {
                ?>
                <div class="formeInfo">
                    <a href="connexion.php" class="parametre">
                        <img src="../assets/image/user.png" alt="Profil" />
                        <p class="linkColor">Profil</p>
                    </a>
                </div>

                <?php
            }
            ?>



            <div class="formeInfo">
                <a href="parametre.html" class="parametre"><img src="../assets/image/para.svg" alt="parametre" /></a>
                <a href="parametre.html" class="parametre">
                    <p class="linkColor">Parametre</p>
                </a>

            </div>

            <div class="sidenavCategorie">
                <h3>Catégories</h3>
                <button onclick="toggleCategories('chatRap')" class="Rap"> Rap </button>
                <button onclick="toggleCategories('chatKpop')" class="Kpop"> Kpop </button>
                <button onclick="toggleCategories('chatClassique')" class="Classique"> Classique </button>
                <button onclick="toggleCategories('chatElectro')" class="Electro"> Electronique </button>
                <button onclick="toggleCategories('chatJazz')" class="Jazz"> Jazz </button>
                <button onclick="toggleCategories('chatRock')" class="Rock"> Rock </button>
                <button onclick="toggleCategories('chatMetal')" class="Metal"> Metal </button>
                <button onclick="toggleCategories('chatPop')" class="Pop"> Pop </button>
                <button onclick="toggleCategories('chatFunk')" class="Funk"> Funk </button>
                <button onclick="toggleCategories('chatCountry')" class="Country"> Country </button>
                <button onclick="Reset()">Reset</button>
                <!-- <div class="Rap sidenavCategories">
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

                <div class="reset formeInfo">
                    <img src="../assets/image/reset.png" alt="Reset" />
                    <p class="reset">Restart</p>
                </div> -->
            </div>

        </div>

        <!-- <script src="assets/javascript/java.js"></script> -->
        <script src="../assets/javascript/categoriesTest.js"></script>
        <!-- <script src="../assets/javascript/popup.js"></script> -->
        <script src="../assets/javascript/sidnav.js"></script>
        <script src="../assets/javascript/supprimerChat.js"></script>


        <script src="../assets/javascript/main.js"></script>
    </div>

    <?php
    if (!isset($_SESSION["id"])) { ?>
        <script src="../assets/javascript/floupagescroll.js"></script>
        <?php
    }
    ?>
</body>

</html>