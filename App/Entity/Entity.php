<?php 

namespace App\Entity;

/**
 * Permet d'instancier chaque objet en une entité unique.
 */
class Entity {

    public function __get($key)
    {
        $method= 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

}