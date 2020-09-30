<?php

namespace App\Model;

use App\Model\Table;

class ExperienceTable extends Table{

    protected $table = "experiences"; // Nom de la table en base de données

    /**
     * Recupere toutes les experiences de la base de données
     * @return array
     */
    public function getAll(){
        return $this->query("
            SELECT * FROM experiences
        ");
    }

}