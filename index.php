<?php

// Importation de notre classe Ecole
require_once 'models/Ecole.php'; 
require_once 'models/Eleve.php'; 
require_once 'models/Classe.php'; 


/*
    Création d'une instance de la classe Ecole. 
    Ici, notre variable $ecole est un objet de la classe Ecole. Elle a accès à l'ensemble des propriétés et méthodes de la classe. 
*/

// $ecole = new Ecole(); 
//on est en train de crée un Objet (une nouvelle instance) 
// la variable $ecole est un objet de la classe Ecole. Je peux stocker plusieurs information dans une seule variable. 
/*
// On Affecte des valeurs à notre Objet
$ecole->nom = 'WebForce3'; 
$ecole->adresse = '15 rue de Moussorgski 75018 PARIS'; 
$ecole->responsable = 'Natacha GILLE';
$ecole->type = 'Centre de Formation';

// Création d'une deuxième Ecole
$ecole2 = new Ecole(); 

$ecole2->nom = 'Studio Berçot';
$ecole2->adresse = '10 rue des Petites Ecuries 75010 PARIS';
$ecole2->responsable = 'Marie Rucki';
$ecole2->type = 'Ecole de Mode';

// Si on fait un print_r on va retrouver les propriétés de Ecole
echo '<pre>';
print_r($ecole); 
print_r($ecole2); 
echo '</pre>';

// Par contre ce que nous venons de faire n'est pas la procédure que l'on doit faire. On évite d'affecter des valeurs comme on l'a fait : $ecole2->non = ''; 
// C'est accessible avec la propriété public mais nous devons toujours utiliser la propriété privé qui n'est pas accéssible sur le navigateur, on a une fatal error. 
*/


$ecole = new Ecole('WebForce3', '15 rue de Moussorgski 75018 PARIS', 'Natacha GILLE', 'Centre de Formation'); 
// On Affecte des valeurs à notre Objet
//$ecole->setNom('WebForce3'); 
//$ecole->setAdresse('15 rue de Moussorgski 75018 PARIS'); 
//$ecole->setResponsable('Natacha GILLE');
//$ecole->setType('Centre de Formation');


$ecole2 = new Ecole('Studio Berçot', '10 rue des Petites Ecuries 75010 PARIS', 'Marie Rucki', 'Ecole de Mode'); 

//$ecole2->setNom('Studio Berçot');
//$ecole2->setAdresse('10 rue des Petites Ecuries 75010 PARIS');
//$ecole2->setResponsable('Marie Rucki');
//$ecole2->setType('Ecole de Mode');

// ATELIER Ex. 3
//($nom, $niveau, $instituteur_principal, $effectif)
$classe1 = new Classe('ES-4', 'terminal', 'M. Dupont', '33');
$classe2 = new Classe('L-3', 'premier', 'Mme Fort', '36');
$classe3 = new Classe('SSI-2', 'seconde', 'M. Paul', '28');

//($sexe, $prenom, $nom, $age)
$eleve1 = new Eleve('f', 'Emira', 'Amami', '17'); 
$eleve2 = new Eleve('m', 'Auguste', 'Dupont', '16'); 
$eleve3 = new Eleve('a', 'Lena', 'Babar', '15');
$eleve4 = new Eleve('m', 'Sebastien', 'Carpin', '16');
$eleve5 = new Eleve('a', 'Pauline', 'Dutrain', '15');
$eleve6 = new Eleve('f', 'Morgane', 'Ham', '17');

echo '<pre>';
print_r($ecole); 
print_r($ecole2); 
// Print_r de l'ex. 3
print_r($classe2);
print_r($eleve2);
print_r($eleve6);
var_dump($classe1);
echo '</pre>';

// Je souhaite afficher le nom de l'école 
echo "<h1>{$ecole->getNom()}</h1>"; // les {} permet d'exprimer l'expression dans son intégralité
/* pour remplacer le nom (on fait un setNom et ensuite un getNom): 
$ecole->setNom('WF3');  
echo "<h1>{$ecole->getNom()}</h1>";
*/

echo "<p>{$ecole->getAdresse()}</p>";
echo "<p>{$ecole->getResponsable()}</p>";

echo "<h1>{$ecole2->getNom()}</h1>";
echo "<p>{$ecole2->getAdresse()}</p>";
echo "<p>{$ecole2->getResponsable()}</p>";

// Atelier Ex. 4
// Var_Dump
var_dump("<h3>{$classe1->getNom()}</h3>"); 
var_dump("<h3>{$classe2->getNom()}</h3>");
var_dump("<h3>{$classe3->getNom()}</h3>");
// Affichage echo
echo "<h3>Les classes {$classe1->getNom()}, {$classe2->getNom()} et {$classe3->getNom()} sont de sortie !</h3>";

// Atelier Ex. 5
echo "<p>Les élèves sont : <br> {$eleve1->getSexe()}, {$eleve1->getPrenom()}, {$eleve1->getNom()} <br> {$eleve2->getSexe()},{$eleve2->getPrenom()}, {$eleve2->getNom()} <br> {$eleve3->getSexe()}, {$eleve3->getPrenom()}, {$eleve3->getNom()} <br> {$eleve4->getSexe()}, {$eleve4->getPrenom()}, {$eleve4->getNom()} <br> {$eleve5->getSexe()}, {$eleve5->getPrenom()}, {$eleve5->getNom()} <br> {$eleve6->getSexe()}, {$eleve6->getPrenom()}, {$eleve6->getNom()} </p>";

// echo de hetInfos qui contient le getSexe, getNom, getPrenom et getAge. 
echo $eleve1->getInfos();
echo $eleve2->getInfos();
echo $eleve3->getInfos();
echo $eleve4->getInfos();

