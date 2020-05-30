<?php
    require "configuration.php";
    require CHEMIN_ACCESSEUR . "LangageDAO.php";
    $listeLangages = LangageDAO::listerLangages();

    require CHEMIN_ACCESSEUR . "ClicDAO.php";
    ClicDAO::enregistrerVisite($_SERVER);

    include "entete.php";
?>
            <div class="div-btn" id="bouton-administration">
                <a class="btn" href="administration/index.php"><h2>Section ADMIN</h2></a>
            </div>
            <div class="div-btn" id="bouton-xlsx">
                <a class="btn" href="export-tableur.php"><h2>Exporter la liste au format .XLSX</h2></a>
            </div>
            <h2>Liste des langages</h2>
            <div id="liste-item">
                <?php
                    foreach($listeLangages as $langage)
                    {
                ?>

                <div class="item-box" onclick="clicItem(<?= $langage['id'] ?>)">
                    <!-- <a href="detail-langage.php?id="> -->
                        <div class="item-img"></div>
                    <!-- </a> -->
                    <div class="item-text">
                        <img class="item-mini" src="mini/mini-<?= $langage['illustration'] ?>" alt="mini-img-langage"/>
                        <h3 class="item-name"><?= $langage["nom"] ?></h3>
                        <p class="item-date"><?= $langage["date"] ?></p>
                        <p class="item-desc"><?= $langage["description"] ?></p>
                    </div>
                </div>
                <?php
                    }

                ?>
            </div>
            <script>
            function clicItem(idItem)
            {
                var url = "detail-langage.php?id="+ idItem;
                console.log(url);
                window.location = url;
            }
            </script>
<?php   include "pied-page.php"; ?>