<?php

class BaseDeDonnees
{
    public static function getConnexion()
    {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
    
        $usager = 'root';
        $motdepasse = 'linuxRoot';
        $hote = 'localhost';
        $base = 'informatique';
    
        $dsn = 'mysql:dbname='.$base.';host=' . $hote;
        $connexion = new PDO($dsn, $usager, $motdepasse);

        return $connexion;
    }
}
?> 
