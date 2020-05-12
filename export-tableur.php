<?php
    require_once 'lib/onesheet/autoload.php';  
    $tableur = new OneSheet\Writer('');

    require "configuration.php";
    require CHEMIN_ACCESSEUR . "LangageDAO.php";
    $listeLangages = LangageDAO::listerLangages();


    foreach($listeLangages as $langage)
    {
        $tableur->addRow(array($langage['nom'], $langage['auteur'], $langage['date']));
    }

    //$tableur->addRow(array('Avatar', '300 minutes'));
    //$tableur->addRow(array('Retour vers le futur', '150 minutes'));    
    $tableur->writeToFile('langages.xlsx');

    header("Location: telechargement-xlsx.php");
?> 

