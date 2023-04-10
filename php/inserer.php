<?php 
    require_once "connec.php"; 
    
    if( $_POST["contenu"]!=""){
        
        if(isset($_FILES['image'])) {
            $image = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $imgSize = $_FILES["image"]["size"];
            if ($imgSize <= 1000000){ 
                move_uploaded_file($file_tmp, '../assets/imgTweet/'.$image);
            }
           
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

// -------------------------------------------------------------------------------------

    /*if(isset($_FILES['image'])) {
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_ext = strtolower(end(explode('.', $file_name)));
        $extensions = array("jpeg","jpg","png");
    
        if(in_array($file_ext,$extensions)=== false){
            echo "Extension not allowed, please choose a JPEG, JPG or PNG file.";
        } else {
            move_uploaded_file($file_tmp, "assets/imgTweet/" . $file_name);
               echo "<img src='assets/imgTweet/$file_name' />";
        }
    }*/
 



    /*if(isset($_POST["submit"])){
        if($_FILES['imgChat']["error"] === 4){
            echo "<script> alert ('L'image ne correspond pas. '); </script>";
        }
        else{
            $imgName = $_FILES["image"]["name"];
            $imgSize = $_FILES["image"]["size"];
            $tmpName = $_FILES["image"]["tmp_name"];

            $extensionValide = ["jpg","png","gif"];
            $extensionImage = explode(".", $imgName);
            $extensionImage = strtolower(end($extensionImage));
            if(!in_array($extensionImage, $extensionValide)){
                echo "<script> alert ('L'extension de l'image n'est pas prise en compte. '); </script>";
            }
            else if ($imgSize > 1000000){
                echo "<script> alert ('La taille de l'image est supérieur a 2 MO.'); </script>";
            }
            else{
                $newImgName  = uniqid();
                $newImgName .= "." . $extensionImage;

                move_uploaded_file($tmpName, "../imgTweet/". $newImgName);
                mysqli_query($conn, $requete);
            }
        }
    }*/


// -----------------------------------------------------------------------


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