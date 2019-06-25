<?php
if (isset($_POST['login']) && isset($_POST['password'])) { 
 setcookie('loginCookie', $_POST['login'], time() + 365*24*3600, '/');
 setcookie('passwordCookie', $_POST['password'], time() + 365*24*3600, '/');
 header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 3 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex justify-content-center align-item-center">
          <h1 class="text-white m-2">Exercice 3</h1>
          <h4 class="text-white m-4 text-center">Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016) Bonus : Le faire en français.</h4>
        </div>
      </header>
        <p class="text-center">
            <?php
                setlocale(LC_TIME, 'fr_FR.utf8');
                echo utf8_encode(strftime('%A %d %B %Y'));
            ?>
        </p>
        <a href="../index.php">Retour</a>
    </div>
  </body>
</html>
