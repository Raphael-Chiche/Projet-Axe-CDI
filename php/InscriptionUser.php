<?php
require_once "connec.php";


if ($_POST["password"] != "" && $_POST["mail"] != "" && $_POST["pseudo"] != "") {
    $data = [
        "password" => password_hash($_POST["password"], PASSWORD_DEFAULT),
        "mail" => $_POST["mail"],
        "pseudo" => $_POST["pseudo"]
    ];

    $requete = $database->prepare("INSERT INTO users (mail,password,pseudo) VALUES (:mail,:password,:pseudo)");
    $requete->execute($data);


    if ($requete) {
        $recuperationUser = $database ->prepare('SELECT * FROM users WHERE mail = ? AND password = ?');
        $recuperationUser -> execute(array($data["mail"],$data["password"]));
        header("Location: ../html/connexion.php");
    } else {
        echo "Une erreur est survenue";
    }



} else {
    echo "Veuillez remplir tous les champs";
}
?>