<?php

include_once('Service.php');
include_once('Employe.php');

$service = new Service();
$service->setNoServ(9)->setVille("Nantes")->setService("dév");

$service1 = new Service();
$service1->setNoServ(10)->setVille("Lens")->setService("dev");

// if($voiture->getModele() == $voiture1->getModele()){
//     echo "Voitures du même modèle \n";
// } else {
//     echo "Voitures de modèles diférents \n";
// }

// // echo $voiture->getMarque() . "\n"; 

// // echo $voiture->sePresenter();

echo $service;


$employe = new Employe();
$employe->setNoEmploye(9)->setNom("Nantes")->setPrenom("dév")->setEmploi("dév")->setEmbauche("dév")->setSalaire("dév")->setCommission("ff")->setNoServ("ff")->setNoSup("ff");

$employe1 = new Employe();
$employe1->setNoEmploye(9)->setNom("Nantes")->setPrenom("dév")->setEmploi("dév")->setEmbauche("dév")->setSalaire("dév")->setCommission("ff")->setNoServ("ff")->setNoSup("ff");

$employe2 = new Employe();
$employe2->setNoEmploye(9)->setNom("Nantes")->setPrenom("dév")->setEmploi("dév")->setEmbauche("dév")->setSalaire("dév")->setCommission("ff")->setNoServ("ff")->setNoSup("ff");

$employe3 = new Employe();
$employe3->setNoEmploye(9)->setNom("Nantes")->setPrenom("dév")->setEmploi("dév")->setEmbauche("dév")->setSalaire("dév")->setCommission("ff")->setNoServ("ff")->setNoSup("ff");