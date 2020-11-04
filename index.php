<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <title></title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
  </head>
  <body>
    <header class="header_index">
      <h1>Biographies de philosophes</h1>
    </header>
    <main class="main_index">
      <form class="form_autocomplete" action="recherche.php" method="get">
        <input type="text" name="search" class="input_index" id="philosophes" placeholder="Que recherchez-vous ?">
      </form>
    </main>
    <footer class="footer_index">
      <p>Auto-complétion, développé par Maxime Siegl & Cécile Wojnowski</p>
    </footer>
  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script src="js/autocompletion.js" charset="utf-8"></script>
</html>
