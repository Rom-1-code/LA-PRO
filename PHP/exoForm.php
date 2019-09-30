<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
<h2>Test Formulaire</h2>
        <?php
        
        //Test de la va variable GET LeChiffre
        if (isset($_GET['LeChiffre']) && !empty($_GET['LeChiffre'])){
            echo "Ma valeur est :".$_GET['LeChiffre'];

        }else{
            echo "Formulaire non saisie";
            ?>
            <form action="exoForm.php" method="GET">
                <label>Votre Chiffre</label>
                <!-- Zone de texte -->
                <input type="text" name="LeChiffre" />
                <!-- bouton de validation -->
                <input type="submit" name="Validerr" value="Cliquer pour valider" />
            </form>
            <?php
        }
        ?>
 <br> <a href="http://192.168.65.204/ProjetBTS/Flemal/Web/PHP/index.php">Retour</a> 
</body>
</html>



