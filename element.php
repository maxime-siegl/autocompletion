<!DOCTYPE html>
<html lang="fr">
<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <title>Element</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
  </head>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <?php
            include 'includes/db.php';
            include 'includes/recup_info_element.php';
        ?>
        <section id="element_philosophe">
            <h2> <?php echo $philosophe['nom']; ?> </h2>
            <p> <?php echo $philosophe['description']; ?> </p>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>

</body>
</html>