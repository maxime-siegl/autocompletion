<?php
    // $_GET['id'] = 2;

    $id = $_GET['id'];
    $req = $db->prepare(" SELECT * FROM philosophes WHERE id = '$id' ");
    $req->execute();
    $philosophe = $req->fetch();

    // var_dump($philosophe);
?>