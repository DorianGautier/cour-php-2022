<?php
// Variable textuelles, pour les chaines de caractères
$mot = 'Bonjour';
$lettre = 'a';
$vide = ''; // Chaine de caractère vide
$espace = ' '; // Juste un espace
//Pour nommez une variable :
// Pas de caractère spéciaux : é à ...
// Un nom explicite, on évitera $a, $b ...
// Les noms des variables en camelCase => On commence par un minuscule et chaque nouveau terme prend une majuscule

$prenomDuProfesseur = 'Arthur';
// $pprof = 'Arthur'; => On ne nomme pas les cariables comme ça

echo $mot;

// Une variable peut changer de valeur
$mot = 'Au Revoir';
echo $mot;

echo '<br />';//saut de ligne HTML
echo $mot;

// Concaténation = coller les chaines de caractères
// L'opérateur de concaténations c'est le point .
$phrase = $mot . ' M. ' . $prenomDuProfesseur;

echo '<br />';
echo $phrase;

// Opérateur condensé de concaténation .=
$phrase = $mot;  // Initialisation de ma phrase avec un premier mot
$phrase = $phrase . ' M. ';  // "Colle" un mot
$phrase = $phrase . $prenomDuProfesseur; // "colle" un mot

echo '<br />';
echo $phrase;

$phrase = $mot; // Initialisation qui ne change pas, "="
$phrase.= ' M. '; // ".="
$phrase .= $prenomDuProfesseur; // ".="

echo '<br />';
echo $phrase;

$phrase = ''; // Initialisation avec une chaine vide
$phrase .= $mot;
$phrase .= ' M. ';
$phrase .= $prenomDuProfesseur; // ".="

echo '<br />';
echo $phrase;