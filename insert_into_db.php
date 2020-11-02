<?php
// Permet d'insérer les informations tirées du fichier JSON dans la bdd
try
{
    $db = new PDO('mysql:host=localhost; port=3308; dbname=autocompletion', 'root', '');

    $db->exec("SET CHARACTER SET utf8");

    $nom = $_POST["title"];
    $description = $_POST["extract"];

   $query = $db->prepare("INSERT INTO philosophes (nom, description) VALUES (:nom, :description)");
   $query->bindParam(':nom', $nom );
   $query->bindParam(':description', $description);
   $query->execute();


    }
    catch(Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

 ?>
