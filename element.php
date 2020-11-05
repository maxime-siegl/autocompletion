<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Element</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header></header>
    <main>
        <?php
            include 'ressources/co_database.php';
            include 'ressources/recup_info_element.php';
        ?>
        <section id="element_philosophe">
            <h2> <?php echo $philosophe['nom']; ?> </h2>
            <p> <?php echo $philosophe['description']; ?> </p>
        </section>
    </main>
    <footer></footer>
</body>
</html>