<html lang="fr" xml:lang="fr">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>Which Language</title>
        <link rel="stylesheet" type="text/css" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/css/liste.css">
    </head>
    <body>
        <div id="contenu-page">
            <header>
                <nav>
                <?php  if(isset($_SESSION['pseudonyme'])) { ?>
                        <div><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/membre.php">Espace membre</a></div>
                <?php } else { ?>
                        <div><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/inscription-1.php">S'inscrire</a></div>
                        <div><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/membre.php">Se connecter</a></div>
                <?php } ?>
                    <div><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/liste-langages.php">Liste des langages</a></div>
                </nav>
                <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/index.php"><h1>Which Language</h1></a>
                <h3>Quel langage choisir ?</h2>
            </header>
