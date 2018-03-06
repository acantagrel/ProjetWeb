<?php
    function requeteAuteur($id_exp,$numeroCampagne)
        {
            //retourne le nom du profil associé à l'id_expérimentateur de la table campagne
            $BDD = new PDO("mysql:host=localhost;dbname=iraeer;charset=utf8","BouCan","surprise",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $req ="SELECT nom, prenom FROM profil, campagne WHERE profil.id = $id_exp AND campagne.id=$numeroCampagne"; 
            $res = $BDD->query($req);
            while($camp=$res->fetch())
            {
                $auteurP= escape($camp['prenom']);
                $auteurN= escape($camp['nom']);
                $auteur = "$auteurP $auteurN";
            }  
            return $auteur;
        }