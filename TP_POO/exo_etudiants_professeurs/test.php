<?php

include_once('Personne.php');
include_once('Etudiant.php');
include_once('Employe.php');
include_once('Professeur.php');

// Les deux étudiants
$personne = new Personne(1,"Mekh","Sam");
$personne1 = new Personne(2,"Benhamou","dams");

$etudiant = new Etudiant($personne->getId(), $personne->getNom(),$personne->getPrenom(),"154264A");
$etudiant1 = new Etudiant($personne1->getId(), $personne1->getNom(),$personne1->getPrenom(),"1545269kk");

// Les deux employés
$personne2 = new Personne(3,"Ziak","Malek");
$personne3 = new Personne(4,"abou","Sofiane");

$employe = new Employe($personne2->getId(), $personne2->getNom(),$personne2->getPrenom(),1900);
$employe1 = new Employe($personne3->getId(), $personne3->getNom(),$personne3->getPrenom(),1750);

// Les deux professeurs
$personne4 = new Personne(5,"Dumortier","Paul");
$personne5 = new Personne(6,"Denis","Henri");

$professeur = new Professeur($personne4->getId(),$personne4->getNom(),$personne4->getPrenom(),1950,"java");
$professeur1 = new Professeur($personne5->getId(),$personne5->getNom(),$personne5->getPrenom(),1550,"PHP");

echo $etudiant;
echo $employe;
echo $professeur;
echo $personne4;


