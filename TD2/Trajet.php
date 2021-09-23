<?php
require_once('Model.php');
class Trajet {

  private $id;
  private $depart;
  private $arrivee;
  private $date;
  private $nbplaces;
  private $prix;
  private $conducteur_login;

  // un getter
  public function get($nom_attribut) {
       return $this->$nom_attribut;
  }

  // un setter
  public function set($nom_attribut,$valeur) {
       $this->$nom_attribut = $valeur;
  }

  // un constructeur
  public function __construct($data = NULL)  {
    /*
   $this->id = $data['id'];
   $this->depart = $data['depart'];
   $this->arrivee = $data['arrivee'];
   $this->date = $data['date'];
   $this->nbplaces = $data['nbplaces'];
   $this->prix = $data['prix'];
   $this->conducteur_login = $data['conducteur_login'];
   */
   if(!is_null($data)){
      foreach($data as $key => $value){
        $this->$key = $value;
      }
   }
  }

  public function afficher(){
    echo "<p> Trajet numéro $this->id de $this->depart à $this->arrivee le $this->date avec $this->nbplaces places à $this->prix euros. </p>";
  }

  public static function getAllTrajets(){
    $rep = Model::$pdo->query('SELECT * FROM trajet');
    $rep->setFetchMode(PDO::FETCH_CLASS, 'Trajet');
    $tab = $rep->fetchAll();
    return $tab;
  }
}
?>
