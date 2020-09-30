<?php

namespace App\HTML;

class BootstrapForm extends Form {

    /**
     * @param string
     * @return string retourne le code html passé en paramètre entouré d'une div
     */
    protected function surround($html){
        return '<div class="form-group">'.$html.'</div>';
    }

    /**
     * @param $name string
     * @return string
     */
    public function input($name, $label){
        return $this->surround('<label>' . $label . '</label><input type="text" name="' . $name . '" class="form-control" required>');
    }

    /**
     * @param $name string Nom du champ 
     * @return string
     */
    public function email($name, $label){
        return $this->surround(
            '<label>'. $label .'</label><input type="email" name="' . $name . '" class="form-control" required>');
    }

    /**
     * @param $name string
     * @return string
     */
    public function password($name, $label){
        return $this->surround('<label>'. $label .'</label><input type="password" name="' . $name . '" class="form-control" required>');
    }

    /**
     * @param $name string
     * @return string
     */
    public function textarea($name, $label){
        return $this->surround('<label>'. $label .'</label><textarea name="' . $name . '" class="form-control" ></textarea> ');
    }

    /**
     * @param $name string $label string $option array 
     * @return string
     */
    public function select($name, $label, $options){
        $label = '<label>'. $label .'</label>';
        $input = '<select name="' . $name . '" class="form-control">';
        foreach($options as $k => $v){
            $attributes ='';
            if($v == $this->getValue($name)){
                $attributes =' selected';
            }
           $input .= "<option value='$k'$attributes>$v</option>";
        }
        $input .= '</select>';
        return $this->surround($label . $input);
}

    /**
     * @return string retourne un bouton de validation de formulaire
     */
    public function submit($name = 'Envoyer' ){
        return $this->surround('<button type="submit" class="btn btn-primary">'.$name.'</button>');
    }

}