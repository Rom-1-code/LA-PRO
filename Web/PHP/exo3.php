<!DOCTYPE HTML>
<html>

<head>
    <link href="stylephp.css" rel="stylesheet">
    <title>Exercice 3</title>
</head>

<body>
    <div>
        <table border=1>
            <tr>
                <?php
                $tab = array('Rom1' => 'Nom', '0' => 'Prénom', '1' => 'Mdp');
                $tab[0] = array('Nom' => 'FLEMAL', 'Prénom' => 'Romain', 'Mdp' => '123');
                $tab[1] = array('Nom' => 'FLAQUET', 'Prénom' => 'Edouard', 'Mdp' => '456');
                $tab[2] = array('Nom' => 'FONTAGNE', 'Prénom' => 'Thomas', 'Mdp' => '789');

                for ($i = 0; $i < 3; $i++) {
                    echo "<tr>";
                    foreach ($tab[$i] as $value) {
                        echo "<td>";
                        echo $value;
                        echo "</td>";
                    }
                    echo "</tr>";
                } ?>
            </tr>
        </table>
    </div>
<xmp>
    <table border=1>
        <tr>
             <php
            $tab = array('Rom1' => 'Nom', '0' => 'Prénom', '1' => 'Mdp');
             $tab[0] = array('Nom' => 'FLEMAL', 'Prénom' => 'Romain', 'Mdp' => '123');
            $tab[1] = array('Nom' => 'FLAQUET', 'Prénom' => 'Edouard', 'Mdp' => '456');
            $tab[2] = array('Nom' => 'FONTAGNE', 'Prénom' => 'Thomas', 'Mdp' => '789');

            for ($i = 0; $i < 3; $i++) {
                echo "<tr>";
                foreach ($tab[$i] as $value) {
                    echo "<td>";
                    echo $value;
                    echo "</td>";
                    }
                    echo "</tr>";
                } ?>
            </tr>
        </table>
    </xmp>

    <a href="/ProjetBTS/Flemal/Web/index.php">Retour</a>
</body>

</html>