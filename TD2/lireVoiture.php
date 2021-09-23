<?php
  require_once('Voiture.php');
  $tab_voit = Voiture::getAllVoitures();
  //print_r($tab_voit);
  foreach ($tab_voit as $key => $value) {
  	$value->afficher();
  }
 ?>
