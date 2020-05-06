<?php
    require "configuration.php";
    require CHEMIN_ACCESSEUR . "LangageDAO.php";
    $listeLangages = LangageDAO::listerLangages();
?>
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>http://localhost/projet-serveur-web-2020-Emustle/</loc>
        <lastmod>2020-04-28</lastmod>
    </url>
    <url>
        <loc>http://localhost/projet-serveur-web-2020-Emustle/index.php</loc>
        <lastmod>2020-04-28</lastmod>
    </url>
    <url>
        <loc>http://localhost/projet-serveur-web-2020-Emustle/liste-langages.php</loc>
        <lastmod>2020-04-28</lastmod>
    </url>
    <url>
        <loc>http://localhost/projet-serveur-web-2020-Emustle/membre.php</loc>
        <lastmod>2020-04-28</lastmod>
    </url>
    <url>
        <loc>http://localhost/projet-serveur-web-2020-Emustle/administration/ajouter-langage.php</loc>
        <lastmod>2020-04-28</lastmod>
    </url>
    <url>
        <loc>http://localhost/projet-serveur-web-2020-Emustle/administration/modifier-langage.php</loc>
        <lastmod>2020-04-28</lastmod>
    </url>
    <url>
        <loc>http://localhost/projet-serveur-web-2020-Emustle/administration/supprimer-langage.php</loc>
        <lastmod>2020-04-28</lastmod>
    </url>
    <?php
        foreach ($listeLangages as $langage) 
        {
    ?>
    <url>
        <loc>http://localhost/projet-serveur-web-2020-Emustle/detail-langage.php?id=<?=$langage['id']?></loc>
        <lastmod>2020-04-28</lastmod>
    </url>
    <?php
        }
    ?>
</urlset>

