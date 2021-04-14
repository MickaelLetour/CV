<?php 

namespace App\Controller;

use App\Model\App;

class BookController extends AppController{

    /**
     * @return array apelle la fonction de la table "books" et retourne le résultat
     */
    public function getBooks(): array
    {
        return App::getInstance()->getTable('BookTable')->getBooks();
    }
}