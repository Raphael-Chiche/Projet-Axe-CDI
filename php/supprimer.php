<?php
    require_once "connec.php";

    $data = [
        "id"=> $_GET["id"],

    ];

    $requete = $database-> prepare("DELETE FROM chats WHERE id = :id");
    $requete->execute($data);

    header("Location: ../index.php");
?>