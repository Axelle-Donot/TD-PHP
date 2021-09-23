<?php
  require_once('Voiture.php');

  $tab_voit = Voiture::getVoitureByImmat('AB123CD');
  //print_r($tab_voit);
  //$tab_voit->afficher();
  $NewVoit = new Voiture ( "lambo", "jaune","RT867GH");
  $NewVoit->save();
 ?>
