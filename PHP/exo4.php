<title>Exercice 3</title>
 <h2>Exercice 3</h2>

        <table border="1">

        <?php $MonTableauDeChiffre = array("Romain" => 12,"Edouard" => 546 );

        foreach ($MonTableauDeChiffre as $indice => $valeur) {
            ?>
            <td>
                <?php
            echo "NOM ".$indice." MDP : ".$valeur."       "; 
        }
        ?>
        <tr>
            <?php

        ?>
        
        </table>
    <br> <a href="http://192.168.65.204/ProjetBTS/Flemal/Web/PHP/index.php">Retour</a> 