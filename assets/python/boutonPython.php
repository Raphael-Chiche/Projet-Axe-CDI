<?php 
    require_once "connec.php"; 
    session_start();
  
        
        $data = [
            "theme" => "ChatRap",
            "contenu" => "Salut je suis un chat",
            "date" => date("Y-m-d H:i:s"),
            "userId" =>$_SESSION["id"],
            "pseudoChat" => $_SESSION["pseudo"]

        ];
        $requete = $database->prepare("INSERT INTO chats (theme, contenu, date,userId,pseudoChat) VALUES (:theme ,:contenu, :date,:userId,:pseudoChat)");
        $requete->execute($data);

        if($requete == true) {
            header('Location: ../index.php');
        } else{
            echo "Une erreur est survenue";
        }

?>