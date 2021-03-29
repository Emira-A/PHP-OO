<?php
// Atelier Ex. 1 et 2

class Classe{
    private $nom; 
    private $niveau; 
    private $institeurPrincipal; 
    private $effectif; 
    // Problématique de Lundi
    private $eleves; // ce sera un tableau 

     //  ---- CONSTRUCTEUR ---- 
     public function __construct($nom, $niveau, $institeurPrincipal, $effectif){
        $this->nom = $nom;
        $this->niveau = $niveau;
        $this->institeurPrincipal= $institeurPrincipal; 
        $this->effectif = $effectif;
        $this->eleves = []; // [] car c'est un tableau vide
     }


    //  ---- SETTERS ---- 
    public function setNom($nom){
        $this->nom = $nom; 
    }

    public function setNiveau($niveau){ 
        $this->niveau = $niveau; 
    }

    public function setInstituteurPrincipal($institeurPrincipal){
        $this->institeurPrincipal = $institeurPrincipal; 
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
        return $this->institeurPrincipal; 
    }

    public function getEffectif(){
        return $this->effectif; 
    }

    public function getClass() {
        return getClass();
    }

    // Récuperer la liste des élèves de la classe 
    public function getEleves(){
        return $this->eleves; 
    }

    // Permet d'ajouter un élève à la "classe"
    // en mettant la classe Eleve devant ma variable $eleve je dis à php que ma variable doit etre de mon objet (cela permet d'eviter d'avoir des variable non conforme). 
    public function ajouterUnEleve(Eleve $eleve){
        $this->eleves[] = $eleve; 
    }

}

