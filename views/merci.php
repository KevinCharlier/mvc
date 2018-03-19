<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../assets/CSS/style.css" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300" rel="stylesheet">
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="shortcut icon" href="../assets/img/apple-touch-icon.png">
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="../assets/js/script.js"></script>
  <title>Merci</title>
</head>

<body>
  <!-- Menu -->
  <header>
    <div id='cssmenu'>
      <ul>
        <li>
          <a href='../index.php'>Home</a>
        </li>
        <li>
          <a href='presentation.php'>Présentation</a>
        </li>
        <li>
          <a href='stock.php'>Le stock</a>
        </li>
        <li>
          <a href='contact.php'>Contact</a>
        </li>
      </ul>
    </div>
  </header>

  <div class="merci">
    <h1>Merci
      <?php if(isset($_GET['prenom'])) {echo $_GET['prenom'];}?> pour votre email !</h1>
  </div>

</body>

<?php VIEW . require_once('footer.php') ?>

</html>