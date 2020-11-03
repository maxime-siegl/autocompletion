<?php
    try {
        $db = new PDO('mysql:host=localhost; dbname=autocompletion', 'root', '');
    }
    catch(exception $e) {
        die('Erreur '.$e->getMessage());
    }
?>