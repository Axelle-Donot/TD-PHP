<?php
require_once 'Conf.php';
class Model{

    private static $pdo = NULL;

    public static function init(){
        $hostname = Conf::getHostname();
        $database = Conf::getDatabase();
        $login = Conf::getLogin();
        $password = Conf::getPassword();

        try {
            // Connexion à la base de données            
			// Le dernier argument sert à ce que toutes les chaines de caractères 
			// en entrée et sortie de MySql soit dans le codage UTF-8
			self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name", $login, $password,
               	array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
   
			// On active le mode d'affichage des erreurs, et le lancement d'exception en cas d'erreur
			self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo $e->getMessage("BDD introuvable");
            die();
        }

    }

    public static function getPDO(){
        if (is_null(self::$pdo)){
            self::init();
        }
        return self::$pdo;
    }
}
?>
