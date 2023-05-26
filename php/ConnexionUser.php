<?php

require_once "connec.php";
session_start();

if ($_POST["password"] != "" && $_POST["email"] != "") {
    $data = [
        "password" => $_POST["password"],
        "mail" => $_POST["email"]
    ];


    $recuperationUser = $database->prepare('SELECT * FROM users WHERE mail = ?');
    $recuperationUser->execute(array($data["mail"]));
    $userDonnees = $recuperationUser->fetchAll(PDO::FETCH_ASSOC);
    //Retourne le resultat sous forme de tableau     

    if ($userDonnees != null) {
        $mdpUser = $userDonnees[0]["password"];
        $passVerify = password_verify($data["password"], $mdpUser);
        if ($passVerify) {
            $_SESSION["id"] = $userDonnees[0]["id"];
            $_SESSION["pseudo"] = $userDonnees[0]["pseudo"];
            echo "ça marche";
            header("Location: ../index.php");
        } 
    }else {
            echo "non";
        }

} else {
    echo "Veuillez remplir tous les champs";
}


?>