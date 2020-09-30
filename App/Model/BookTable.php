<?php

namespace App\Model;

use App\Model\Table;

class BookTable extends Table{

    protected $table = "books"; // Nom de la table en base de données

    /**
     * Recupere toutes les réaliations de la base de données
     * @return array
     */
    public function getBooks(){
        return $this->query("
            SELECT * FROM books
        ");
    }

}