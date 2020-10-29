<?php

include_once("Profil.php");
include_once("Personne.php");
include_once("Utilisateur.php");
include_once("Developpeur.php");
include_once("Manager.php");

$profilMN = new Profil(1, "MN", "Manager");
$profilDG = new Profil(2, "DG", "Directeur Général");
$profilCP = new Profil(3, "CP", "Chef de Projet");

$user1 = new Utilisateur(1, "David", "DUPOND", "d.d@d.com", "061010101010", 1000, "dave", "123456", "Informatique", $profilMN);
$user1->setLogin("dave")->setPassword("123456")->setService("Infomatique")->setProfil($profilMN);
$user2 = new Utilisateur(2, "Paul", "DUPOND", "d.d@d.com", "061010101010", 10000, "polo", "123456", "Informatique", $profilDG);
$user3 = new Utilisateur(3, "Omar", "DUPOND", "d.d@d.com", "061010101010", 100000, "omar", "123456", "Informatique", $profilCP);

$developpeur = new Developpeur(1, "Omar", "DUPOND", "d.d@d.com", "061010101010", 1000, "FRONT-END");
$developpeur1 = new Developpeur(2, "Karim", "DuSud", "d.d@d.com", "061010101010", 100000, "BACK-END");

$manager = new Manager(1, "LeFou", "Mourad", "d.d@d.com", "061010101010", 100000, "Informatique");
$manager1 = new Manager(2, "Kamel", "LaMenace", "d.d@d.com", "061010101010", 100000, "Informatique");


// var_dump($user1);
echo " Le développeur : " . $developpeur->getNom() . " " .  $developpeur->getPrenom() ." dont le mail est : ". $developpeur->getMail() ." et le num est : ". $developpeur->getTelephone() ." a un salaire de : ". $developpeur->calculerSalaire() ."."
 . " Il est spécialisé dans le " . $developpeur->getSpecialite();
 echo Personne::$counter;

// echo $user2->calculerSalaire();