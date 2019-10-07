<!DOCTYPE HTML>
<html>
    <head>
        <link href="stylephp.css" rel="stylesheet">
        <title>Exercice 3 PHP</title>
    </head>
    <body>
        <div>
            <table border=1>
                <tr>
                    <?php
                        $tab = array ('Col1' => 'Nom' , 'Col2' => 'Prénom', 'Col3' => 'Mdp');
                        $tab[0] = array ('Nom' => 'COLBERT' , 'Prénom' => 'Grégoire' ,'Mdp' => '123');
                        $tab[1] = array ('Nom' => 'COL' , 'Prénom' => 'Greg', 'Mdp' => '456');
                        $tab[2] = array ('Nom' => 'BERT' , 'Prénom' => 'Oire', 'Mdp' => '789');
                        
                        for ($i = 0; $i < 3; $i++) 
                        {
                            echo "<tr>";
                            foreach ($tab[$i] as $value) {
                                echo "<td>";
                                echo $value;
                                echo "</td>";
                            }
                            echo "</tr>";
                        }?>
                </tr>
        </table>
    </div>
    <a href="../ExPHP.php">Retour</a><br>
</body>    
</html>