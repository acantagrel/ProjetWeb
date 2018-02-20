<?php //session_start() //require("lib/login.php"); ?>


<!-- barre de navigation -->
    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <!-- Bouton d'accès affiché à droite si la zone d'affichage est trop petite -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-target">
                <span class="sr-only">Activer la navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.php"><span class="glyphicon glyphicon-film"></span> MyMovies</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-target">
            <ul class="nav navbar-nav">
                <?php
                    if (array_key_exists('login',$_SESSION) and array_key_exists('mdp',$_SESSION))
                    {
                        ?>
                        <li ><a href="lib/movie-add.php">Ajouter un film</a></li>
                        <?php 
                    }
                ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php
                            if (array_key_exists('login',$_SESSION) and array_key_exists('mdp',$_SESSION))
                            {
                                ?>
                                <span class="glyphicon glyphicon-user"></span> <?= "Bienvenue ".$_SESSION['login']; ?><b class="caret"></b>  
                                <?php
                            } else
                            {
                                ?>
                                <span class="glyphicon glyphicon-user"></span> Non connecté <b class="caret"></b>
                                <?php
                            }
                        ?>
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                            if (array_key_exists('login',$_SESSION) and array_key_exists('mdp',$_SESSION))
                            {
                                ?>
                                <li><a href="lib/logout.php"> Déconnexion </a></li>
                                <?php
                            } else
                            {
                                ?>
                                <li><a href="lib/login.php">Se connecter</a></li>
                                <?php
                            }
                        ?>
                    </ul>
                </li>
                <!--<li><a href="lib/login.php"><span class="glyphicon glyphicon-user"></span> Non connecté</a></li> -->
            </ul>
        </div>
    </div>
