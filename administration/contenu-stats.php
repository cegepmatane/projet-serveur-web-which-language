<?php
include ("../configuration.php");
require CHEMIN_ACCESSEUR . "LangageDAO.php";
$listeCategories = LangageDAO::listerCategories();

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
                <a class="btn" href="liste-langages.php"><h2> < Quitter CONTENU</h2></a>
            </div>
            <div id="liste-item">
                <table>
                    <tr>
                        <th>Catégorie</th>
                        <th>Nombre de langages</th>
                        <th>Nombre d'utilisateurs</th>
                        <th>Plus ancien</th>
                        <th>Plus récent</th>
                    </tr>
                    <?php
                    foreach($listeCategories as $categorie)
                    {
                    ?>
                    <tr>
                        <th><?=$categorie["categorie"]?></th>
                        <td><?=$categorie["nombre_langages"]?></td>
                        <td><?=$categorie["nombre_utilisateurs"]?></td>
                        <td><?=$categorie["plus_ancien"]?></td>
                        <td><?=$categorie["plus_recent"]?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
<?php include "../pied-page.php"; ?>
        