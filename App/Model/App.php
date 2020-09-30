<?php
namespace App\Model;
use App\Autoloader;
use App\Config;
use App\Database\Database;

class App{

    public static $title = "DevWebMickaelLetour";
    private $db_instance;
    private static $_instance;

    /**
     * instancie la connexion a la base de données
     */
    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    /**
     *  permet le chargemet du module autoloader qui charger les class de manière dynamique
     */
    public static function load(){
        session_start();
        require ROOT . '/App/Autoloader.php';
        Autoloader::register();
    }

    /**
     * @param string
     * permet l'apelle d'un model de Table 
     */
    public function getTable($name){
        $class_name = '\\App\\Model\\' . ucfirst($name);
        return new $class_name($this->getDb());
    }  

    /**
     * Effectue un appel a la base de données
     */
    public function getDb(){
        $config = Config::getInstance(ROOT . '/Config/config.php');
        if(is_null($this->db_instance)){
            $this->db_instance = new Database($config->get('db_name'),$config->get('db_user'),$config->get('db_pass'),$config->get('db_host'));
        }
        return $this->db_instance;
    }

}