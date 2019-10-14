<!doctype html>
<html>

<head>
    <link href="style.css" rel="stylesheet">
    <title>Exercie 2.2 </title>

</head>

<body>
    <p> Exercice 2.2 </p>
    <table border="1">

        <?php
        $tableau = array("nom" => "Flemal", "prenom" => "Romain", "mdp" => "123");
        ?>
        <tr>
            <td>Nom</td>
            <td>Prenom</td>
            <td> Mdp</td>
        </tr>
        <tr>
            <td><?php echo $tableau["nom"]; ?></td>
            <td><?php echo $tableau["prenom"]; ?></td>
            <td><?php echo $tableau["mdp"]; ?></td>
        </tr>

    </table>
    <xmp>
        <table border="1">
            <php $tableau=array("nom"=> "Flemal", "prenom" => "Romain", "mdp" => "123");
                ?>
                <tr>
                    <td>Nom</td>
                    <td>Prenom</td>
                    <td> Mdp</td>
                </tr>
                <tr>
                    <td>
                        <php echo $tableau["nom"]; ?>
                    </td>
                    <td>
                        <php echo $tableau["prenom"]; ?>
                    </td>
                    <td>
                        <php echo $tableau["mdp"]; ?>
                    </td>
                </tr>
        </table>
    </xmp>

    <a href="/ProjetBTS/Flemal/Web/index.php">Retour</a>
    
</body>

</html>