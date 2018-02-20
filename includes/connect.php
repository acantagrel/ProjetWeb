<?php
          
    try
        {
            $BDD = new PDO("mysql:host=localhost;dbname=iraeer;charset=utf8","BouCan","surprise",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            ;//connexion serveur de BDD mysql et choix de base
        }
    catch (Exception $e)
        {
            die('Vous n\'accéder pas à la base. Erreur : '.$e->getMessage());
        }
?>