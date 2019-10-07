<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style1.css">
        <title>Exercice 1</title>
    </head>
    <body>
    <h1>Exercice 1</h1>
        Si mon nombre aléatoire est paire j'affiche du rouge, sinon j'affiche du bleu
        <?php $NombreAleatoire = rand ( 0 , 100 );
        
        if ($NombreAleatoire%2 == 1){
            ?>
            <div id="bleu">
            <?php echo "$NombreAleatoire est impair";
             ?>
             </div>
             <?php
        }
        else {
            ?>
            <div id="rouge">
            <?php echo "$NombreAleatoire est pair";
            ?>
            </div>
            <?php
        }
        ?>
    </div>
    <br> <a href="/ProjetBTS/Flemal/Web/index.php">Retour</a> 
    </body>
<html>
 
        
