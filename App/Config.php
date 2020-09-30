<?php

namespace App;

/**
 * Configure la classe a l'aide du fichier config contenant les informations permettant la connexion a la base de données
 */
class Config {

    private $settings = [];
    private static $_instance;

    /**
     * Stocke la configuration de connexion a la base de données
     */
    public static function getInstance($file)
    {
        if(is_null(self::$_instance)){
            self::$_instance = new Config($file);            
        }
        return self::$_instance;
    }

    /**
     * instancie les paramètres de connexion a la base de données
     */
    public function __construct($file)
    {
        $this->settings = require ($file);
    }

    /**
     * permet de récupérer les informations du fichier de connexion a la base de données.
     */
    public function get($key)
    {
        if(!isset($this->settings[$key])){
            return null;
        }
        return $this->settings[$key];
    }

}