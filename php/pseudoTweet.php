<?php
require_once "connec.php";
session_start();

$psuedo_search = $_SESSION["pseudo"];

$jeRecherche = $database->prepare("SELECT * FROM users WHERE pseudo LIKE '%$pseudo_search%' ORDER BY date ASC");
$jeRecherche->execute();
$tweet = $jeRecherche->fetchAll(PDO::FETCH_ASSOC);
?>