<html>

<head>
	<title>Exo 3</title>
</head>

<body>

	<?php

	$Montableau[0] = array("nom" => " Demolliens ", "prenom" => " Nicolas ", "MDP" => " AzErTy ");
	$Montableau[1] = array("nom" => " Garcia ", "prenom" => " Flo ", "MDP" => " AzErTy ");
	$Montableau[2] = array("nom" => " Garnon ", "prenom" => " Theo ", "MDP" => " AzErTy ");

	for ($i = 0; $i < 3; $i++) {

		foreach ($Montableau[$i] as $key => $value) {
			echo $key;
			echo $value;
		}
	}
	?>

	<xmp>
		<php

		$Montableau[0]= array("nom"=> "Demolliens","prenom"=> "Nicolas","MDP"=> "AzErTy");
		$Montableau[1]= array("nom"=> "Verfaillie","prenom"=> "Antoine","MDP"=> "AzErTy");
		$Montableau[2]= array("nom"=> "Gosselin","prenom"=> "Victor","MDP"=> "AzErTy");

		for($i=0;$i<3;$i++){ foreach ($Montableau[$i] as $key=> $value)
			{
			echo $key;
			echo $value;

			}
		}
		?>
    </xmp>
    <br> <a href="/ProjetBTS/Flemal/Web/index.php">Retour</a> 
</body>

</html>