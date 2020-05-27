<?php
include ("../configuration.php");
require CHEMIN_ACCESSEUR . "ClicDAO.php";
$listeParJour = ClicDAO::listerStatsParJour();
$joursDeLaSemaine = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

$listeParLangue = ClicDAO::listerStatsParLangue();

?>

<html lang="fr" xml:lang="fr">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>Liste des langages de programmation</title>
        <link rel="stylesheet" type="text/css" href="../css/liste.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    </head>
    <body>
        <div id="contenu-page">
            <header>
                <h1>Liste des langages de programmation</h1>
            </header>
            <div id="bouton-retour">
                <a class="btn" href="liste-langages.php"><h2> < Quitter VISITES</h2></a>
            </div>
            <div id="liste-item">
            <!--TABLEAU DE STATISTIQUES PAR JOUR DE LA SEMAINE-->
                <table>
                    <tr>
                        <th>Jour</th>
                        <th>Clics</th>
                        <th>Visites (nombre de clients)</th>
                    </tr>
                    <?php
                    foreach($listeParJour as $jourEnregistre)
                    {
                    ?>
                    <tr>
                        <th>
                            <?php
                            //En SQL, DAYOFWEEK() renvoie un entier entre 1 et 7.
                            //1=Sunday, 2=Monday, 3=Tuesday, 4=Wednesday, 5=Thursday, 6=Friday, 7=Saturday d'après w3schools.com
                            //On modifie donc la valeur numérique par le nom du jour correspondant
                            echo $joursDeLaSemaine[$jourEnregistre['jour'] - 1];
                            ?>
                        </th>
                        <td><?=$jourEnregistre['clics']?></td>
                        <td><?=$jourEnregistre['visites']?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            <!--TABLEAU DE STATISTIQUES PAR LANGUE-->
                <table>
                    <tr>
                        <th>Langue</th>
                        <th>Clics</th>
                        <th>Visites (nombre de clients)</th>
                    </tr>
                    <?php
                    foreach($listeParLangue as $langueEnregistree)
                    {
                    ?>
                    <tr>
                        <th><?=$langueEnregistree['langue']?></th>
                        <td><?=$langueEnregistree['clics']?></td>
                        <td><?=$langueEnregistree['visites']?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
            <!-- GRAPHIQUE STATS JOUR-->
            <div class="chart-container" style="height:80vh; width:80vw; margin: 50px auto;">
                <canvas id="graphique-jour" ></canvas>
            </div>
            <script>
                <?php
                    foreach($listeParJour as $jourEnregistre)
                    {
                        $jour[] = "\"".$joursDeLaSemaine[$jourEnregistre['jour'] - 1]."\"";
                        $nombreVisitesParJour[] = $jourEnregistre['visites'];
                    }
                ?>

                var visitesParJour = [<?php echo implode(',' , $nombreVisitesParJour); ?>];
                var moyenneVisitesParJour = visitesParJour.reduce((a,b) => a + b, 0);
                console.log(moyenneVisitesParJour);

                var cibleStatsJours = document.getElementById('graphique-jour').getContext('2d');
                var graphiqueLigneJours = new Chart(cibleStatsJours, {
                    type: 'line',
                    data: {
                        labels: [<?php echo implode(',' , $jour); ?>],
                        datasets: 
                        [
                            {
                                label: 'Visites par jour',
                                data: visitesParJour,
                                backgroundColor: 'pink',
                                borderColor: 'darkslateblue'
                            }
                        ]
                    },
                    options: { responsive: true }
                });

            </script>
<?php include "../pied-page.php"; ?>