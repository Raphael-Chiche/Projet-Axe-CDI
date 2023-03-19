<?php 
    require_once "connec.php"; 

    if( $_POST["contenu"]!=""){
        $data = [
            "theme" => $_POST["theme"],
            "contenu" => $_POST["contenu"],
            "date" => date("Y-m-d H:i:s")
            
        ];

        $requete = $database->prepare("INSERT INTO chats (theme, contenu, date) VALUES (:theme ,:contenu, :date)");
        $requete->execute($data);

        if($requete == true) {
            header('Location: ../index.php');
        } else{
            echo "Une erreur est survenue";
        }


    } else{
        echo "Veuillez remplir tout les champs";
    }



    if($_POST["password"] !="" && $_POST["mail"] != ""){
        $data= [
            "password"=> password_hash($_POST["password"], PASSWORD_DEFAULT),
            "mail" =>$_POST["mail"]
        ];

        $requete = $database->prepare("INSERT INTO users (mail,password) VALUES (:mail,:password)");
        $requete->execute($data);

        if($requete){
            header("Location: ../html/connexion.php");
        }else{
            echo "Une erreur est survenue";
        }
      


    } else{
        echo "Veuillez remplir tous les champs";
    }
    
?>