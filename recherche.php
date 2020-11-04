<?php
include("includes/db.php");
// Afficher les résultats de recherche provenant du formulaire de l'index
if(isset($_GET['search'])){

  $search = $_GET['search'];

  $query = $db->query("SELECT * FROM philosophes WHERE nom LIKE '$search%'");
  $tableau = $query->fetchAll();
  var_dump($tableau);
} ?>
