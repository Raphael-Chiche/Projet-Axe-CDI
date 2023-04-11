<?php 
    require_once "connec.php"; 
    
    if( $_POST["contenu"]!=""){
        
        if(isset($_FILES['image'])) {

            $image = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $imgSize = $_FILES["image"]["size"];

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
            "image" => $image
        ];
        $requete = $database->prepare("INSERT INTO chats (theme, contenu, date, image) VALUES (:theme ,:contenu, :date, :image)");
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