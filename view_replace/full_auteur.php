<?php
    include 'traitement/co_db.php';

    if(isset($_GET['test'])){

        $req = $db->prepare("SELECT * FROM philosophes");
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($result);
        var_dump($result);
        // foreach($result as $philo){
        //     echo '<tr>';
        //     echo '<td>'.$philo['nom'].'</td>';
        //     echo '<td>'$philo['description'].'</td>';
        //     echo '</tr>';
        // }
    }
?>