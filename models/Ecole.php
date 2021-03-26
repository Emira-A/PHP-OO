<?php

// Une classe PHP est une entitée regroupant par thème des variables appelées "propriété" et des fonctions appelées "méthode"

class Ecole{
    /*
    Déclaration des propriétés de notre classe. 
    On a d'abord utiliser "public" puis ensuite "private"
    ---
    "private" nous permet d'interdire l'accès direct aux propriétes par les objets. 
    ---
    En "private" les propriétés sont accessibles UNIQUEMENT depuis l'intérieur de la classe. 

    les propriétés doivent être TOUJOURS PRIVE
    */

    private $nom; 
    private $adresse; 
    private $type; 
    private $responsable; 

     //  ---- CONSTRUCTEUR ---- 

     /**
     * Alors, pour permettre l'attribution
     * de valeurs à mes propriétés, je vais
     * mettre en place un CONSTRUCTEUR.
     * ---------------------------------
     * L'objectif du constructeur c'est
     * de remplir / d'initialiser / hydrater
     * les propriétés de la classe avec des valeurs.
     * IL DOIT ETRE ACCESSIBLE PUBLIQUEMENT !!!
     * ---------------------------------
     * Cette fonction est executée AUTOMATIQUEMENT
     * par PHP au moment de l'instanciation de la classe.
     */

     // permet d'initialiser une valeur de notre propriété -> hydrater un objet (le remplir avec des valeurs)
     // __construct(){} est une fonction magique. C'est PHP qui l'exécute. 

     public function __construct($nom, $adresse, $type, $responsable){
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->type = $type; 
        $this->responsable = $responsable;
     }


    //  ---- SETTERS ---- 
    // une fonction public car doit être accessible par l'objet - Attribut des valeurs

    public function setNom($nom){
        // dans une classe, on accède aux propriétés (et les méthodes) grâce à $this. 
        $this->nom = $nom; 
    }

    public function setAdresse($adresse){ 
        $this->adresse = $adresse; 
    }

    public function setType($type){
        $this->type = $type; 
    }

    public function setResponsable($responsable){
        $this->responsable = $responsable; 
    }

    //  ---- GETTERS ---- 
    // vont nous permettre de retourner les valeurs 

    public function getNom(){
        // dans une classe, on accède aux propriétés (et les méthodes) grâce à $this. 
        return $this->nom; 
    }

    public function getAdresse(){ 
        return $this->adresse; 
    }

    public function getType(){
        return $this->type; 
    }

    public function getResponsable(){
        return $this->responsable; 
    }

};