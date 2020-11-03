<?php
    include 'co_db.php';
    if (isset($_GET['id_philosophe'])){
        $id_philosophe = $_GET['id_philosophe'];
        $req = $db->prepare("SELECT * FROM philosophes WHERE id = ? ");
        $req->execute([$id_philosophe]);
        $philosophe = $req->fetch();
    }

?>