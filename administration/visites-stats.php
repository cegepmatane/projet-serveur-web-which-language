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
<?php include "../pied-page.php"; ?>