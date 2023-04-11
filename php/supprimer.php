<?php
    require_once "connec.php";

    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $requete = $database->prepare("DELETE FROM chats WHERE id=:id");
      $requete->execute(['id' => $id]);
    }
    
    header('Location: ../index.php');
?>