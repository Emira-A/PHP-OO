<?php

require_once 'models/Personnage.php'; 

// Valeurs 'name', 'force', 'resistance'
$personnage = new Personnage('hulk', '8', '9'); 

echo '<pre>';
var_dump($personnage);  
echo '</pre>';

echo "Le nom du personnage est " . $personnage->getName();

/*
Exercice 5 - méthodes - afficher les données
Créez une méthode getNameAndSpecs() qui retourne la phrase suivante :
Le nom du personnage est XXX (il possède une force de YYY et une résistance de ZZZ).
*/


echo $personnage->getNameAndSpecs(); 

echo $personnage->getNameAndSpecs(true); 



/*
Exercice 6 - méthodes et arguments
Améliorez getNameAndSpecs() de sorte à lui donner un paramètre (booléen) nommé $longString, de sorte à ce que :
si $longString = true, alors affichez la phrase de l’exercice 5
si $longString = false, alors affichez : (Personnage XXX (F: YYY, R: ZZZ))
Mettez une valeur par défaut égale à false sur cette méthode.
*/

// Récupétation des classes



