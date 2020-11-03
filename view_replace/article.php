<main>
<?php include 'traitement/recup_philosophe.php'; ?>
    <h2 class="auteur"><?php echo $philosophe['nom']; ?></h2>
    <hr>
    <p class="description"><?php echo $philosophe['description']; ?></p>
</main>