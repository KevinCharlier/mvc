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
  <title>Contact</title>
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
        <li class='active'>
          <a href='contact.php'>Contact</a>
        </li>
      </ul>
    </div>
  </header>

  <?php

if(isset($_POST['submit'])){

$options = array(
  'prenom' 		=> FILTER_SANITIZE_STRING,
  'nom' 			=> FILTER_SANITIZE_STRING,
  'email' 		=> FILTER_VALIDATE_EMAIL,
  'message' 		=> FILTER_SANITIZE_STRING);

$result = filter_input_array(INPUT_POST, $options);
$checkResult =[];	 

$prenom = trim($_POST['prenom']);
$nom = trim($_POST['nom']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

$nombreErreur = 0; // Variable qui compte le nombre d'erreur

if (!isset($_POST['prenom'])) {
  $nombreErreur++;
  $erreur1 = '<p>Il y a un problème avec la variable "prénom".</p>';
  } else {
  if (empty($_POST['prenom'])) {
    $nombreErreur++;
    $erreur2 = "<p>Vous avez oublié d'entrer votre prénom.</p>";
  }
}

if (!isset($_POST['nom'])) {
  $nombreErreur++;
  $erreur3 = '<p>Il y a un problème avec la variable "nom".</p>';
  } else {
  if (empty($_POST['nom'])) {
    $nombreErreur++;
    $erreur4 = "<p>Vous avez oublié d'entrer votre nom.</p>";
  }
}

// Définit toutes les erreurs possibles
if (!isset($_POST['email'])) { // Si la variable "email" du formulaire n'existe pas (il y a un problème)
  $nombreErreur++; // On incrémente la variable qui compte les erreurs
  $erreur5 = '<p>Il y a un problème avec la variable "email".</p>';
} else { // Sinon, cela signifie que la variable existe (c'est normal)
  if (empty($_POST['email'])) { // Si la variable est vide
  $nombreErreur++; // On incrémente la variable qui compte les erreurs
  $erreur6 = '<p>Vous avez oublié de donner votre email.</p>';
  } else {
  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $nombreErreur++; // On incrémente la variable qui compte les erreurs
    $erreur7 = '<p>Cet email ne ressemble pas un email.</p>';
  }
  }
}

if (!isset($_POST['message'])) {
  $nombreErreur++;
  $erreur8 = '<p>Il y a un problème avec la variable "message".</p>';
} else {
  if (empty($_POST['message'])) {
  $nombreErreur++;
  $erreur9 = '<p>Vous avez oublié de donner un message.</p>';
  }
}

if ($nombreErreur==0) {

  $text = "Nom: $nom";
  $text .= "Prénom: $prenom";
  $text .= "Email: $email";
  $text .= "Message: $message";
  $title = "";
  
  
  @mail("kevcharlier@gmail.com", "Titre", $title, $text);
  header("Location: merci.php?prenom=$prenom");

} else { // S'il y a un moins une erreur

echo '<div style="border:1px solid #ff0000; padding-top:5px;">';
echo '<p style="color:#ff0000;">Désolé, il y a eu '.$nombreErreur.' erreur(s). Voici le détail des erreurs:</p>';
if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
if (isset($erreur3)) echo '<p>'.$erreur3.'</p>';
if (isset($erreur4)) echo '<p>'.$erreur4.'</p>';
if (isset($erreur5)) echo '<p>'.$erreur5.'</p>';
if (isset($erreur6)) echo '<p>'.$erreur6.'</p>';
if (isset($erreur7)) echo '<p>'.$erreur7.'</p>';
if (isset($erreur8)) echo '<p>'.$erreur8.'</p>';
if (isset($erreur9)) echo '<p>'.$erreur9.'</p>';
echo '</div>';
}
  }
?>

    <!-- Contact -->
    <div class="bckgcontact">
      <div class="contact">
        <h1 class="page-title">Contact</h1>
        <div class="info">
          <div class="formulaire">
            <form action="contact.php" method="POST" name="formulaire" id="formulaire">
              <p>
                <input placeholder="Prénom" <?php $value=$prenom; echo "value='$prenom'" ?> id="inputprenom" type="text" name="prenom"/>
              </p>
              <p>
                <input placeholder="Nom" <?php $value=$nom; echo "value='$nom'" ?> id="inputnom" type="text" name="nom">
              </p>
              <p>
                <input placeholder="E-mail" <?php $value=$email; echo "value='$email'" ?> id="inputemail" type="email" name="email"/>
              </p>
              <p>
                <textarea cols="30" rows="10" id="message" placeholder="Entrer votre message" id="inputmessage" type="text" name="message"></textarea>
              </p>
              <main>
                <div>
                  <button type="submit" name="submit" class="btn" form="formulaire">Envoyer</button>
                </div>
              </main>
            </form>
          </div>
          <div class="adresse">
            <h3>Adresse et numéro de téléphone :</h3>
            <p>+32 495 20.59.34</br>Rue Saint Georges, 35</br>1400 Nivelles</br>Belgique</br>
            </p>
          </div>
          <div class="iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2532.588840895241!2d4.324949051452518!3d50.597594984531625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c232d3694f6c59%3A0xe7333aff0bd54fec!2sRue+Saint-Georges+35%2C+1400+Nivelles!5e0!3m2!1sfr!2sbe!4v1521036236455"
              width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="magasin">
            <h3>Le magasin est ouvert le samedi matin de 10h00 à 12h30 ou sur rendez-vous !</h3>
            <h4>Retrouvez nos mises à jour en vous
              <a href="https://www.facebook.com/antiquites.decoration" target="blank">abonnant à notre page Facebook</a>
            </h4>
          </div>
        </div>
      </div>
    </div>



</body>

<?php VIEW . require_once('footer.php') ?>

</html>