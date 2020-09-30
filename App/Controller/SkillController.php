<?php 

namespace App\Controller;

use App\Model\App;

class SkillController extends AppController{

    /**
     * @return array apelle la fonction de la table "skillTable" et retourne le résultat
     */
    public function getSkills(){
        $skills[] = App::getInstance()->getTable('SkillTable')->getSkillByCategory('Back-End');
        $skills[] = App::getInstance()->getTable('SkillTable')->getSkillByCategory('Front-End');
        $skills[] = App::getInstance()->getTable('SkillTable')->getSkillByCategory('Soft-Skill');
        return $skills;
    }

    /**
     * @return array apelle la fonction de la table "skillTable" et retourne le résultat
     */
    public function getCategories(){
        $categories = App::getInstance()->getTable('SkillTable')->getCategory();
        return $categories;
    }

}