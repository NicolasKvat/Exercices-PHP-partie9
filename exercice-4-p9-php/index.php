<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 4 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex flex-column justify-content-center align-item-center">
          <h1 class="text-white m-2 text-center">Exercice 4</h1>
          <h4 class="text-white m-4 text-center">Afficher le timestamp du jour. Afficher le timestamp du mardi 2 août 2016 à 15h00.</h4>
        </div>
      </header>
        <p class="text-center">Le timestamp du jour est : 
            <?php
            $timestamp = time();
            echo $timestamp;
            ?>
        </p>
        <p class="text-center">Le timestamp de la date du 02/08/2016 est : 
            <?php
            $dateTime = new DateTime('2016-08-02 15:00:00');
            echo $dateTime->getTimestamp();
            ?>
        </p>
        <a href="../index.php">Retour</a>
    </div>
  </body>
</html>