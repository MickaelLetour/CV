<?php 

namespace App\Controller;

use App\Model\App;

class TrainController extends AppController{

    /**
     * @return array apelle cette fonction de la table "trainTable" et retourne le résultat
     */
    public function getTrain(){
        $trains = App::getInstance()->getTable('TrainTable')->getAll();
        return $trains;
    }

}