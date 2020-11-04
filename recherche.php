<?php
include("includes/db.php");
// Afficher les résultats de recherche provenant du formulaire de l'index
if(isset($_GET['search'])){

  $search = $_GET['search'];

  $query = $db->query("SELECT * FROM philosophes WHERE nom LIKE '$search%'");
  //$resultats = $query->fetchAll();

   while ($donnees = $query->fetch()){
     echo $donnees['nom'] . "<br>";
     echo substr($donnees['description'], 0, 200) . "..." . "<br>";
     echo "<a href='element.php?id=". $donnees['id'] ."'> Lien vers l'article </a>" ."<br>";
  }
} ?>
