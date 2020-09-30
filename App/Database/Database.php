<?php

namespace App\Database;
use PDO;

/**
 * Instancie les appels a la base de données
 */
class Database {

    private $db_name;

    private $db_user;

    private $db_pass;

    private $db_host;

    private $pdo;

    /**
     * @param string Initialise les variables contenant les données nécessaire pour la connexion a la base de données
     */
    public function __construct($db_name, $db_user, $db_pass, $db_host){

        $this ->db_name = $db_name;

        $this ->db_user = $db_user;

        $this ->db_pass = $db_pass;

        $this ->db_host = $db_host;

    }
    
    /**
     * Iniatilise l'outil PDO de MySQL
     */
    private function getPDO() {
            
        $pdo = new PDO("mysql:dbname=$this->db_name;host=$this->db_host", $this->db_user , $this->db_pass, array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->pdo = $pdo;
        
        return $pdo;

    }

    /**
     * @param string
     * @return array execute la requete sql et renvoie le résultat 
     */
    public function query($statement, $class_name = null, $one = false){
        $req = $this->getPDO()->query($statement);
        if(
            strpos($statement, 'UPDATE') === 0 ||
            strpos($statement, 'INSERT') === 0 ||
            strpos($statement, 'DELETE') === 0 
        ){
            return $req;
        }
        if($class_name === null){
            $req->setFetchMode((PDO::FETCH_OBJ));
        } else {
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        };
        if($one){
            $datas =$req->fetch();
        } else {
            $datas = $req->fetchAll();
        }
        return $datas;
    }

    /**
     * @param string
     * @return array execute la requete sql préparéet renvoie le résultat 
     */
    public function prepare($statement, $param, $class_name = null, $one = false) {
        $req = $this->getPDO()->prepare($statement);
        $res = $req->execute($param);
        if(
            strpos($statement, 'UPDATE') === 0 ||
            strpos($statement, 'INSERT') === 0 ||
            strpos($statement, 'DELETE') === 0 
        ){
            return $res;
        }
        if($class_name === null){
            $req->setFetchMode((PDO::FETCH_OBJ));
        } else {
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        };
        $req->execute($param);
        if($one){
            $datas = $req->fetch();
        }else {
            $datas = $req->fetchAll();
        }
        return $datas;
    }

    /**
     * Récupère la dernière insertion en base de données
     */
    public function lastInsertId(){
        return $this->getPDO()->lastInsertId();
    }
}
