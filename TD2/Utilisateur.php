<?php
require_once('Model.php');
class Utilisateur {

  private $login;
  private $nom;
  private $prenom;

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
   $this->login = $data['login'];
   $this->nom = $data['nom'];
   $this->prenom = $data['prenom'];
   */
   if(!is_null($data)){
      foreach($data as $key => $value){
        $this->$key = $value;
      }
   }
  }

  public function afficher(){
    echo "<p> Annonce de $this->prenom $this->nom : </p>";
  }

  public static function getAllUtilisateurs(){
    $rep = Model::$pdo->query('SELECT * FROM utilisateur');
    $rep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');
    $tab = $rep->fetchAll();
    return $tab;
  }
}
?>
