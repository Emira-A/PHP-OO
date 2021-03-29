<?php

// importation de ma classe Personnage
require_once 'Personnage.php'; 

// Création d'un premier personnage 
$personnage1 = new Personnage('superman', '100', '100');

var_dump($personnage1); 

// création d'un autre personnage 
$personnage2 = new Personnage('Batman'); 

$personnage2->setStrength(90); 
$personnage2->setPower(95); 
var_dump($personnage2); 

echo $personnage1->getNameAndSpecs(); 
echo'<br>'; 
echo $personnage2->getNameAndSpecs(); 