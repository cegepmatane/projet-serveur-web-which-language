<?php
    require "configuration.php";
    require CHEMIN_ACCESSEUR . "LangageDAO.php";
    $listeLangages = LangageDAO::listerLangages();

    include "entete.php";
?>
            <div id="bouton-administration">
                <a class="btn" href="administration/liste-langages.php"><h2>Section ADMIN</h2></a>
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
                        <h3 class="item-name"><?= $langage["nom"] ?></h3>
                        <p class="item-date"><?= $langage["date"] ?></p>
                        <p class="item-desc"><?= $langage["description"] ?></p>
                    </div>
                </div>
                <?php
                    }

                ?>
            </div>
            <footer>
                &copy;Hy-Vong 2019
            </footer>
        </div>
        <script>
        function clicItem(idItem)
        {
            var url = "detail-langage.php?id="+ idItem;
            console.log(url);
            window.location = url;
        }
        </script>
    </body>
</html>