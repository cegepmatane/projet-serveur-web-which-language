<html lang="fr" xml:lang="fr">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>Which Language</title>
        <link rel="stylesheet" type="text/css" href="css/liste.css">
    </head>
    <body>
        <div id="contenu-page">
            <header>
                <nav>
                <?php  if(isset($_SESSION['pseudonyme'])) { ?>
                        <div><a href="membre.php">Espace membre</a></div>
                <?php } else { ?>
                        <div><a href="inscription-1.php">S'inscrire</a></div>
                        <div><a href="membre.php">Se connecter</a></div>
                <?php } ?>
                    <div><a href="liste-langages.php">Liste des langages</a></div>
                </nav>
                <a href="index.php"><h1>Which Language</h1></a>
                <h3>Quel langage choisir ?</h2>
            </header>
