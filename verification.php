<?php

	$array = array("mail" => $_POST['mail'], "nom" => $_POST['nom'], "prenom" => $_POST['prenom'], "adresse" => $_POST['adresse'], "age" => $_POST['age'], "telephone" => $_POST['telephone']);
	$trouve = false;
	$cpt = 0;

	foreach ($array as $key => $value) {
		$cpt++;
		if( isset($value) && empty($value)) {
			echo "le champs ";
			echo $key;
			echo " est vide";
			echo"<br>";
			$trouve = true;
		}
		else if ($cpt >= sizeof($array) && !$trouve){
			echo "Formulaire envoyé";
		}
	}
?>