<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include_once "../includes/connect.php";
    $req="SELECT * FROM donneeattr";
    $res=$BDD->query($req);
    
    ?>

    <form>
        <?php 
        foreach ($res as $ligne){ ?>
        <div class="form-group">
            <div class="container">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-2">
                            <?= $ligne['gauche']?>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <?php 
                                if($ligne['inv']==0){
                                    for ($i=1;$i<8;$i++)
                                    { ?>
                                    <div class="col-md-1">
                                        <input type="radio" class="form-check-input" name="<?= $ligne['partie']?><?=$ligne['numeroPartie']?>" id="<?= $ligne['partie']?><?=$ligne['numeroPartie']?><?=$i-4?>" value="<?=$i-4?>">
                                    </div>
                                    
                                     <?php } 
                                }
                                else {
                                    for ($i=1;$i<8;$i++)
                                    { ?>
                                    <div class="col-md-1">
                                        <input type="radio" class="form-check-input" name="<?= $ligne['partie']?><?=$ligne['numeroPartie']?>" id="<?= $ligne['partie']?><?=$ligne['numeroPartie']?><?=-($i-4)?>" value="<?=-($i-4)?>">
                                        
                                        </div>
                                        <?php } 
                                    }?>
                                                             
                                </label>
                            </div>
                            <div class="col-md-2">
                                <?= $ligne['droite']?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../jquery/jquery.min.js"></script>

    </body>
</html>