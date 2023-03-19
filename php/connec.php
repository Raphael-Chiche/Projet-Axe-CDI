<?php
    try{
        $database = new PDO("mysql:host=localhost;dbname=music_chat", "root","");
    } catch(Exception $e){
        die("Erreur :" . $e->getMessage());
    }
    
?>