<?php

namespace App\Model;

use App\Model\Table;

class TrainTable extends Table{

    protected $table = "training"; // Nom de la table en base de données

    /**
     * Recupere toutes les réaliations de la base de données
     * @return array
     */
    public function getAll(){
        return $this->query("
            SELECT * FROM training
        ");
    }

}