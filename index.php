<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/CSS/style.css" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="shortcut icon" href="/mvc/assets/img/apple-touch-icon.png">
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="assets/js/script.js"></script>
  <title>Antiquités, Décorations, Belgique &mdash; meubles industriels</title>
</head>

<body>
  <!-- Menu -->
  <header>
    <div id='cssmenu'>
      <ul>
        <li class='active'>
          <a href='index.php'>Home</a>
        </li>
        <li>
          <a href='views/presentation.php'>Présentation</a>
        </li>
        <li>
          <a href='views/stock.php'>Le stock</a>
        </li>
        <li>
          <a href='views/contact.php'>Contact</a>
        </li>
      </ul>
    </div>
<?php VIEW . require_once('views/accueil.php') ?>
  </header>
</body>

<?php VIEW . require_once('views/stock.php') ?>
<?php VIEW . require_once('views/citation.php') ?>

</html>
