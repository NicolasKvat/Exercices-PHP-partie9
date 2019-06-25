
<?php
$months=['Janvier','Février','Mars,','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];
//je vérifie si des paramêtres ont été passés via la méthode POST
if (isset($_POST['year']) && isset($_POST['month'])) {
    //Si oui, je les récupère dans les deux variables suivantes : premier et le dernier jour du mois
    $firstDay = mktime(0, 0, 0, $_POST['month'], 1, $_POST['year']);
    $lastDay = mktime(0, 0, 0, $_POST['month'] + 1, 1, $_POST['year']) - 3600 * 24; 
}else{
    //Si non, j'initialise ces variables selon le mois en cours
    $firstDay = mktime(0,0,0,date('m',time()),1,date('Y',time()));
    $lastDay = mktime(0, 0, 0,date('m',time()) + 1, 1, date('Y',time())) - 3600 * 24; 
}
//cette variable servira à looper sur le calendrier
$thisDay = $firstDay;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice TP PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex flex-column justify-content-center align-item-center">
          <h1 class="text-white m-2 text-center">Exercice TP</h1>
          <h4 class="text-white m-4 text-center">Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année. En fonction des choix, afficher un calendrier comme celui ci :</h4>
        </div>
      </header>
      <main class="d-flex flex-column justify-content-center">     
        <form action="index.php" method="post" class=" form w-75">
            <select  name="month" required="" id="month" class="custom-select w-25" required>
                <?php for ($month = 0; $month <= 11; $month++) { ?>
                    <option value="<?= $month + 1 ?>"
                    <?php if ($month + 1 == date('n', $firstDay)) { ?>
                                selected
                            <?php } ?>
                            >
                                <?= $months[$month]; ?>
                    </option>
                <?php } ?>
            </select>
            <select name="year" id="year" class="custom-select w-25" required>
                <?php for ($year = 1900; $year <= 2099; $year++) { ?>
                    <option value="<?= $year ?>"
                    <?php if ($year == date('Y', $firstDay)) { ?>
                                selected
                            <?php } ?>
                            >
                                <?= $year ?>
                    </option>
                <?php } ?>
            </select>
            <button class="btn btn-primary my-2">Valider</button>
        </form>          
        <!-- Mois et année affichés dans le calendrier-->
        <h3><?= $months[date('m', $firstDay) - 1] . ' ' . date('Y', $firstDay) ?></h3>
        <table class="table table-bordered table-hover w-75 shadow">
            <thead class="thead-dark">
                <th>Lundi</th>
                <th>Mardi</th>
                <th>Mercredi</th>
                <th>Jeudi</th>
                <th>Vendredi</th>
                <th>Samedi</th>
                <th>Dimanche</th>
            </thead>
            <tbody>
                <?php for ($tr = 0; $tr < 6; $tr++) { //je boucle sur les 6 lignes du tableau ?>
                    <tr class="text-center">
                        <?php for ($td = 1; $td < 8; $td++) { //je boucle sur les 7 jours de la semaine du tableau ?>
                            <?php if (date('N', $thisDay) == $td && $thisDay <= $lastDay) {  // si le jour correspond à sa position dans le calendrier ?>
                                <td> <?= date('d', $thisDay) // j'ajoute une cellule avec la date'    ?> </td>
                                <?php $thisDay += 3600 * 24; //j'incrémente mon timestamp d'une journée ?>
                            <?php } else { //sinon j'ajoute une cellule vide et grise'?>
                                <td class="bg-secondary">&ensp;</td>
                            <?php } ?> 
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
      </main>
    </div>
  </body>
</html>
