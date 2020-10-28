<?php

include_once('Batiment.php');
include_once('Maison.php');

$batiment = new Batiment("405 rue du molinel");
$batiment2 = new Batiment("407 rue du molinel");


$maison = new Maison("405 rue du molinel","100","10");
$maison2 = new Maison("405 rue du loup","180","11");
$maison3 = new Maison("405 rue du car","10","12");

echo $maison;
