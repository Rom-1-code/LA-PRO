<!DOCTYPE HTML>
<html>
    <head>
        <link href="stylephp.css" rel="stylesheet">
        <title>Exercice 2.2 PHP</title>
    </head>
    <body>
        <div>
            <table border=1>
                <tr>
                <?php
                    $chiffres = array ("Flaquet"=>128," Flemal"=>254);
                    foreach ($chiffres as $indice => $valeur)
                    {
                ?>
                    <td>
                <?php
                        echo " Nom:". $indice." Mdp:".$valeur.".";
                ?>
                    </td>
                <?php
                    }
                ?>
                    </tr>
            </table>
        </div>
        <br> <a href="/ProjetBTS/Flemal/Web/index.php">Retour</a> 
    </body>    
</html>