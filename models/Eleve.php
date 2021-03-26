<?php

class Eleve{

    private $sexe; 
    private $prenom; 
    private $nom; 
    private $age; 

     //  ---- CONSTRUCTEUR ---- 
     public function __construct($sexe, $prenom, $nom, $age){
        $this->sexe = $sexe;
        $this->prenom = $prenom;
        $this->nom = $nom; 
        $this->age = $age;
     }


    //  ---- SETTERS ---- 
    public function setSexe($sexe){
        $this->sexe = $sexe; 
    }

    public function setPrenom($prenom){ 
        $this->prenom = $prenom; 
    }

    public function setNom($nom){
        $this->nom = $nom; 
    }

    public function setAGe($age){
        $this->age = $age; 
    }

    //  ---- GETTERS ---- 
    public function getSexe(){ 
        return $this->sexe; 
    }

    public function getPrenom(){
        return $this->prenom; 
    }

    public function getNom(){
        return $this->nom; 
    }

    public function getAge(){
        return $this->age; 
    }

}