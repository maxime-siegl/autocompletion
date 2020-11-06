<?php
include("includes/db.php");
// Afficher les résultats de recherche provenant du formulaire de l'index
if(isset($_GET['search'])){

  $search = $_GET['search'];

  $query = $db->query("SELECT * FROM philosophes WHERE nom LIKE '%$search%'");
  ?>




<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <title>Résultat Recherche</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  </head>
  <body>
    <?php include 'includes/header.php'; ?>

    <main class="main_recherche">
      <?php
       while ($donnees = $query->fetch()){ ?>
         <article>
           <h2> <?php echo $donnees['nom']; ?> </h2>
           <p> <?php echo substr($donnees['description'], 0, 200) . "... <br>" ; ?>
           <?php echo "<a href='element.php?id=". $donnees['id'] ."'> Lien vers l'article </a>" ."<br>"; ?> </p>
         </article>
      <?php
    }
  }else{
    header('Location:index.php');
  } ?>

    </main>

    <?php include 'includes/footer.php'; ?>

  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script src="js/autocompletion.js" charset="utf-8"></script>
</html>
