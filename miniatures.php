<?php
    require_once 'lib/simpleimage/SimpleImage.php'; 

    require "configuration.php";
    require CHEMIN_ACCESSEUR . "LangageDAO.php";
    $listeLangages = LangageDAO::listerLangages();

    $image = new SimpleImage();

    foreach($listeLangages as $langage)
    {
        $image->load('img/'.$langage['illustration']);
        $image->resizeToWidth(100);
        $image->save('mini/mini-'.$langage['illustration']);
    }

    /*
    $image->load('img/fox.jpg');
    $image->resizeToWidth(100);

    $image->save('mini/image-test.jpg');
    */
?>
