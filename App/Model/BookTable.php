<?php

namespace App\Model;

use App\Model\Table;

class BookTable extends Table{

    protected $table = "books"; // Nom de la table en base de données

    /**
     * Recupere toutes les réaliations de la base de données
     * @return array
     */
    public function getBooks(): array
    {
        $books = $this->query("
            SELECT * FROM books
        ");

        $bookWithImg = [];
        foreach ($books as $book){
            $bookWithImg[] = $this->query("
            SELECT * FROM books INNER JOIN image ON books.id = image.book WHERE books.id = $book->id;
            ");
        }
        return $bookWithImg;
    }

}