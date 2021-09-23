<?php
require_once('Model.php');
class Voiture {

  private $marque;
  private $couleur;
  private $immatriculation;

  // un getter
  public function getMarque() {
       return $this->marque;
  }

  // un setter
  public function setMarque($marque2) {
       $this->marque = $marque2;
  }

  public function getCouleur(){
    return $this->couleur;
  }

  public function setCouleur($couleur2){
    $this->couleur = $couleur2;
  }

  public function getImmatriculation(){
    return $this->immatriculation;
  }

  public function setImmatriculation($immatriculation2){
    $this->immatriculation = $immatriculation2;
  }

  // La syntaxe ... = NULL signifie que l'argument est optionel
  // Si un argument optionnel n'est pas fourni,
  //   alors il prend la valeur par défaut, NULL dans notre cas
  public function __construct($m = NULL, $c = NULL, $i = NULL) {
  if (!is_null($m) && !is_null($c) && !is_null($i)) {
    // Si aucun de $m, $c et $i sont nuls,
    // c'est forcement qu'on les a fournis
    // donc on retombe sur le constructeur à 3 arguments
    $this->marque = $m;
    $this->couleur = $c;
    $this->immatriculation = $i;
  }
  }

  // une methode d'affichage.
  public function afficher() {
    // À compléter dans le prochain exercice
    echo "<p> Voiture $this->immatriculation de marque $this->marque et de couleur $this->couleur </p>";
  }

  public static function getAllVoitures(){
    $rep = Model::getPDO()->query('SELECT * FROM Voiture');
    $rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
    $tab_voit = $rep->fetchAll();
    return $tab_voit;
  }
}
?>
