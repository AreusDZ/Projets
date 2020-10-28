<?php

include_once('Batiment.php');
include_once('Maison.php');

$batiment = new Batiment("405 rue du molinel");

$maison = new Maison($batiment->getAdresse(),"100","10");


echo $maison;
