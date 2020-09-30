<?php

namespace App\HTML;

/**
 * class Form
 * Permet de générer un formulaire
 */
class Form{

    /**
     * @var array Données utilisés par le formulaire
     */
    protected $data;
    protected $mail;
    protected $to = 'mickael.letour@hotmail.fr';
    
    /**
     * @var string Tag utilisé pour entourer les champs
     */
    public $surround = 'p';

    /**
     * @param array $data Données utilisées par le formulaire
     */
    public function __construct($data = array()){
        $this->data=$data;
    }

    /**
     * @param  $html string Code HTML a entourer
     * @return string
     */
    protected function surround($html){
        return "<$this->surround>$html</$this->surround>";
    }

    /**
     * @param $index string Index de la valeur a récupérer
     * @return string
     */
    protected function getValue($index){
        if(is_object($this->data)){
            return $this->data->$index;
        }
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param $name string Nom du champ 
     * @return string
     */
    public function input($name, $label){
        return $this->surround(
            '<label>'. $label .'</label><input type="text" name="' . $name . '" value="' . $this->getValue($name) . '">');
    }

    /**
     * @param $name string Nom du champ 
     * @return string
     */
    public function email($name, $label){
        return $this->surround(
            '<label>'. $label .'</label><input type="email" name="' . $name . '" value="' . $this->getValue($name) . '">');
    }

    /**
     * @param $name string Nom du champ 
     * @return string
     */
    public function password($name, $label){
        return $this->surround(
            '<label>'. $label .'</label><input type="password" name="' . $name . '" value="' . $this->getValue($name) . '">');
    }

    /**
     * @param $name string $label string $option array 
     * @return string
     */
    public function select($name, $label, $options){
            $label = '<label>'. $label .'</label>';
            $input = '<select name="' . $name . '">';
            foreach($options as $k => $v){
                $attributes ='';
                if($k === $this->getValue($name)){
                $attributes =' selected';
                }
                $input .= "<option value='$k'$attributes>$v</option>";
            }
            $input .= '</select>';
            return $this->surround($label . $input);
    }

    /**
     * @param $name string Nom du champ 
     * @return string
     */
    public function textarea($name, $label){
        return $this->surround(
            '<label>'. $label .'</label><textarea name="' . $name . '" value="' . $this->getValue($name) . '">');
    }

    /**
     * @return string 
     */
    public function submit(){
       return $this->surround('<button type="submit">Envoyer</button>');
    }

}