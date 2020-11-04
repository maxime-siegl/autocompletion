<?php
include("includes/db.php");
echo json_encode([$_POST["term"], "b"]);
// Requête comparant le term avec les données de la bdd
$term = $_POST["term"];

 $query = $db->prepare("SELECT nom FROM philosophes WHERE nom LIKE '$term%' LIMIT 8 ");
 $query->execute();
?>
