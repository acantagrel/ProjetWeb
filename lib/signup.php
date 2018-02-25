<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Attention au chemin ! -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/iraeer.css" rel="stylesheet">
        <title>IRAEER</title>

    </head>
    <body>
        <?php 
            include "../includes/navBar.php";
        ?>

        <div class="form">
            <form method="POST" action="signup.php">
                <fieldset>
                    <h4> Inscription </h4>
                    <br/>
                    <label for="nom">Nom : </label>
                    <input type="text" id="nom" name="nom" placeholder="Entrez votre nom"/>
                    <br/><br/>
                    <label for="prenom">Prenom : </label>
                    <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom"/>
                    <br/><br/>
                    <label for="naiss">Date de naissance : </label>
                    <select name="jour" id="jour">
                        <option value='0'>Jour</option>
                        <?php
                            for($date_jour = 1; $date_jour <= 31; $date_jour++)
                            {
                                if ($date_jour < 10){                    
                        ?>
                        <option value='<?php $date_jour ?>'>0<?php echo $date_jour?></option>
                        <?php
                                }
                            else {
                        ?>
                        <option value='<?php $date_jour ?>'><?php echo $date_jour?></option>
                        <?php           
                                }
                            }
                        ?>
                    </select>
                    <select name="mois" id="mois">
                            <option value='0'>Mois</option>
                        <?php
                            for($date_mois = 1; $date_mois <= 12; $date_mois++)
                            {
                                if ($date_mois <10) {
                        ?>
                        <option value='<?php $date_mois ?>'>0<?php echo $date_mois?></option>
                        <?php
                            }
                            else {
                        ?>
                        <option value='<?php $date_mois ?>'><?php echo $date_mois?></option>
                        <?php 
                            }
                        }
                        ?>
                    </select>
                    <select name="annee" id="annee">
                        <option value='0'>Année</option>
                        <?php
                            for($date_an = 1900; $date_an <= 2018; $date_an++)
                            {
                        ?>
                        <option value='<?php $date_an ?>'><?php echo $date_an?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <br/><br/>
                    <!--<div class="form-group has-error">
                        <label class="control-label" for="login">Login : </label>
                        <input type="text" class="form-control"  id="login" name="login" placeholder="Entrez votre identifiant" />
                        <span class="help-block">Cet identifiant a déjà été utilisé</span>
                    </div>-->
                    <label class="control-label" for="login">Login : </label>
                    <input type="text" id="login" name="login" size="40" placeholder="Entrez votre identifiant" />
                    <br/>
                    <label for="mdp">Mot de passe : </label>
                    <input  type="password" name="mdp" size="40" placeholder="Entrez un mot de passe" />
                    <br/><br/>
                    <label for="mdp">Vérification du mot de passe : </label>
                    <input  type="password" name="mdp" size="40" placeholder="Entrez votre mot de passe à nouveau" />
                    <br/><br/>
                    <input type = "submit" value="Envoyer" />
                </fieldset>
            </form>
        </div> 

        <!-- plugins bootstrap -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../jquery/jquery.min.js"></script>

        <?php 
            include "../includes/footer.php";
        ?>
    </body>
</html>