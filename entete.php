<html lang="fr" xml:lang="fr">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>Which Language</title>
        <link rel="stylesheet" type="text/css" href="css/liste.css">
    </head>
    <body>
        <div id="contenu-page">
            <header>
                <a href="index.php"><h1>Which Language : Quel langage choisir ?</h1></a>
                <nav>
                    <div><a href="liste-langages.php">Liste des langages</a></div>
                    <div><a href="membre.php">Membre</a></div>
                </nav>
            </header>
            <div id="bienvenue">
                <h2>Bonjour
                <?php
                    if(isset($_SESSION['pseudonyme']))
                    {
                        echo $_SESSION['pseudonyme'];
                    }
                ?>
                ! </h2>
            </div>