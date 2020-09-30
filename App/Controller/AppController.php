<?php 

namespace App\Controller;

use App\Controller\Controller;

class AppController extends Controller{

    
    protected $template ='default'; // fichier template du site par default

    /**
     * parametre le chemin par defaut du template
     */
    public function __construct(){
        $this->viewPath = ROOT . '/App/Views/';
    }

}