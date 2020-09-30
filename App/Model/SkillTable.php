<?php

namespace App\Model;

use App\Model\Table;

class SkillTable extends Table{

    protected $table = "skills"; // Nom de la table en base de données

    /**
     * Recupère toutes les compétences
     * @return array
     */
    public function getSkillByCategory($category_name){
        return $this->query("
            SELECT skills.id, skills.name, skills_category.name as category
                FROM skills
                LEFT JOIN skills_category
                    ON skills.category_id = skills_category.id
                WHERE skills_category.name = ?", [$category_name]
        );
    }

    /**
     * Recupère toutes les catégories de compétences
     * @return array
     */
    public function getCategory(){
        return $this->query("
            SELECT * FROM skills_category
            "); 
    }

}