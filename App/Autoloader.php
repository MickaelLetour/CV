<?php

namespace App;

/**
 * Class autoloader
 * @package App
 */
class Autoloader {

    /**
     * Enregistre notre autoloader
     */
    public static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * inclue le fichier correspondant a notre class
     * @param string le nom de la classe a charger
     */
    static function autoload($class){
        if(strpos($class, __NAMESPACE__ . '\\') === 0 ){//vérifier si la class existe seulement a cette position
            $class = str_replace(__NAMESPACE__.'\\', '', $class);//Remplace le namespace par un string vide dans le require
            //$class = str_replace('\\', '/', $class); // Trasnforme les "\" en "/" si besoin
            require (__DIR__ . '/' . $class . '.php');
        }
    }

}
