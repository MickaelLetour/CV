<?php

namespace App\Model;

use App\Database\Database;

class Table {

    protected $table;
    protected $db;
    protected $surround = 'p';

    /**
     * instancie les tables et prend en paramètre la base de données
     */
    public function __construct(Database $db)
    {
        $this->db = $db;
        if(is_null($this->table)){
            var_dump($db);
            $parts = explode('\\',get_class($this));
            $class_name = end($parts);
            $this->table = strtolower($class_name);
        }
       return $this->db;
    } 

    /**
     * @return array Renvoie le résultat de la requete sql
     */
    public function all() {
       return $this->query('SELECT * FROM ' . $this->table);
    } 

    /**
     * @param int
     * @return string Renvoie le résultat de la base de la donnée lié a l'id passé en paramètre
     */
    public function find($id){
        return $this->query("SELECT * FROM $this->table WHERE id = ?", [$id], true);
    }


    /**
     * @param int
     * @param string
     * @return array Renvoie un tableau contenant la valeur lié aux clés passés en paramètre
     */
    public function list($key, $value){
        $records = $this->all();
        $return = [];
        foreach ($records as $v){
            $return[$v->$key] = $v->$value;
        }
        return $return;
    }

    /**
     * apelles les fonctions prepare ou query pour les requetes sql
     */
    public function query($statement, $attributes = null, $one = false){
        if ($attributes) {
            return $this->db->prepare(
                $statement, 
                $attributes, 
                str_replace('Model', 'Entity',str_replace('Table', 'Entity', get_class($this))),  
                $one);
        } else {
            return $this->db->query(
                $statement, 
                str_replace('Model', 'Entity',str_replace('Table', 'Entity', get_class($this))), 
                $one
            );
        }
    }

}