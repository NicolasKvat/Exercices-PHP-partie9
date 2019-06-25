<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 1 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex flex-column justify-content-center align-item-center">
          <h1 class="text-white m-2 text-center">Exercice 1</h1>
          <h4 class="text-white m-4 text-center">Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)</h4>
        </div>
      </header>
        <p class="text-center"> La date d'aujourd'hui est : 
            <?php
                echo '<strong>' . $today = date("m / d / y") . '</strong>';   
            ?>
        </p>
        <a href="../index.php">Retour</a>
    </div>
  </body>
</html>
