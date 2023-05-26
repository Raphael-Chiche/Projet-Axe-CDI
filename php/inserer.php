<?php 
    require_once "connec.php"; 
    session_start();
    // si le contenu est vide, on ne lance rien
    if( $_POST["contenu"]!=""){
        
        if(isset($_FILES['image'])) {

            $image = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['tmp_name']; //nom de l'extension
            $imgSize = $_FILES["image"]["size"]; //taille de l'image

            if ($imgSize > 1000000){ 
                echo "La taille de l'image est trop grande";
                die;
            }
            
            move_uploaded_file($file_tmp, '../assets/imgTweet/'.$image);
            
           
        } else {
            $image = null;
        }
        
        $data = [
            "theme" => $_POST["theme"],
            "contenu" => $_POST["contenu"],
            "date" => date("Y-m-d H:i:s"),
            "image" => $image,
            "userId" =>$_SESSION["id"],
            "pseudoChat" => $_SESSION["pseudo"]

        ];
        $requete = $database->prepare("INSERT INTO chats (theme, contenu, date, image,userId,pseudoChat) VALUES (:theme ,:contenu, :date, :image,:userId,:pseudoChat)");
        $requete->execute($data);

        if($requete == true) {
            header('Location: ../index.php');
        } else{
            echo "Une erreur est survenue";
        }


    } else{
        echo "Veuillez remplir tout les champs";
    }

?>