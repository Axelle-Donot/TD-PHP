<?php
	require_once ('Trajet.php');
	require_once ('Utilisateur.php');

	
	$save = Trajet::findPassager($_GET["trajet_identifiant"]);
	echo $save;
	
?>