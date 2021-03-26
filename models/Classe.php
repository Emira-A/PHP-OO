<?php

class Classe{
    private $nom; 
    private $niveau; 
    private $instituteur_principal; 
    private $effectif; 

     //  ---- CONSTRUCTEUR ---- 
     public function __construct($nom, $niveau, $instituteur_principal, $effectif){
        $this->nom = $nom;
        $this->niveau = $niveau;
        $this->instituteur_principal= $instituteur_principal; 
        $this->effectif = $effectif;
     }


    //  ---- SETTERS ---- 
    public function setNom($nom){
        $this->nom = $nom; 
    }

    public function setNiveau($niveau){ 
        $this->niveau = $niveau; 
    }

    public function setInstituteurPrincipal($instituteur_principal){
        $this->instituteur_principal = $instituteur_principal; 
    }

    public function setEffectif($effectif){
        $this->effectif = $effectif; 
    }

    //  ---- GETTERS ---- 
    public function getNom(){ 
        return $this->nom; 
    }

    public function getNiveau(){
        return $this->niveau; 
    }

    public function getInstituteurPrincipal(){
        return $this->instituteur_principal; 
    }

    public function getEffectif(){
        return $this->effectif; 
    }

    public function getClass() {
        return get_class();
    }




}

