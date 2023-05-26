<?php
require_once "../../php/connec.php";


$requete = $database->prepare("SELECT * FROM chats ORDER BY date DESC LIMIT 1");
$requete->execute();
$chats = $requete->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($chats)

?>