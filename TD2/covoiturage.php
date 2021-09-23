<?php
  require_once('Utilisateur.php');
  require_once('Trajet.php');
  $tab_users = Utilisateur::getAllUtilisateurs();
  //print_r($tab_user);
  $tab_trips = Trajet::getAllTrajets();
  //print_r($tab_trips);
  foreach ($tab_users as $key => $value) {
  	$value->afficher();
  	$tab_trips[$key]->afficher();
  }
 ?>