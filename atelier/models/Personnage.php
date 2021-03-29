<?php

/*
Créez une classe Personnage avec pour attributs name, strength (valeur par défaut: 0), power (valeur par défaut: 0).
Créez un objet de la classe Personnage, puis donnez-lui un nom, une force (power) et une résistance (strength).
*/

class Personnage {

    private $name; 
    private $strength; 
    private $power; 

    //  ---- CONSTRUCTEUR ---- 
    public function __construct($name, $strength = null, $power = null ){
        $this->name = $name;
        $this->strength = $strength;
        $this->power= $power; 
     }

     //  ---- SETTERS ---- 
    public function setName($name){
        $this->name = $name; 
    }

    public function setStrength($strength){
        $this->strength = $strength; 
    }

    public function setPower($power){
        $this->power = $power; 
    }


    //  ---- GETTERS ---- 
    public function getName(){ 
        return $this->name; 
    }

    public function getStrength(){ 
        return $this->strength; 
    }

    public function getPower(){ 
        return $this->power; 
    }


    public function getNameAndSpecs($longString = false){
        if($longString === true){
        return "<p>
            Le nom du personnage est 
            {$this->getName()} 
            (il possède une force de 
            {$this->getPower()} 
            et une resistance de 
            {$this->getStrength()} 
            ).</p>";
        } else{
            return "<p>Personnage {$this->getName()} (F: {$this->getPower()} , R: {$this->getStrength()})</p>";
        }
    }

}

