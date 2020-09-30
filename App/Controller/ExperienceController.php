<?php 

namespace App\Controller;

use App\Model\App;

class ExperienceController extends AppController{

    /**
     * @return array apelle cette fonction de la table "ExperienceTable" et retourne le résultat
     */
    public function getExperiences(){
        $experiences = App::getInstance()->getTable('ExperienceTable')->getAll();
        return $experiences;
    }

}