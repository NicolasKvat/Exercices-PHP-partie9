<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 6 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex flex-column justify-content-center align-item-center">
          <h1 class="text-white m-2 text-center">Exercice 6</h1>
          <h4 class="text-white m-4 text-center">Afficher le nombre de jour dans le mois de février de l'année 2016.</h4>
        </div>
      </header>
        <p>
            <?php
                $daysNumber = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
                echo 'Le mois eu deuch février 20heu16 à la possessions aquetuellement actuel et non contractuel de la contractualisation de la libération des nombre numériques à base de chiffre comportant une fondation d\'arabie y ci tout. Du coup y\'a ' . '<strong>' . $daysNumber . '</strong>' . ' jours.'; 
            ?>
        </p>
    </div>
  </body>
</html>