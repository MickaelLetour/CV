<?php 

namespace App\Controller;

class Controller{
    
    protected $viewPath;
    protected $template;

    /**
     * @param string 
     * @param array
     * @return array transfert la variable contenant le tableau vers le chemin donné 
     */
    protected function render($view, $variables = []){
        ob_start();
        extract ($variables);
        require($this->viewPath . str_replace('.', '/', $view) . '.php');
        ob_get_clean();
        require($this->viewPath . 'template/' .$this->template . '.php');
    }

    /**
     * Renvoie une erreur indiquant que la page est interdite d'accès
     */
    protected function forbidden(){
        header('HTTP/1.0 403 Forbidden');
        die('Accès interdit');
    }

    /**
     * Renvoie une erreur indiquant que la page est introuvable
     */
    protected function notFound(){
        header('HTPP/1.4 404 Not Found');
        die('Page introuvable');
    }

}