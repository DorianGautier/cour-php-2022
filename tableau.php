<?php

// Tableau simples
$tableau = [1, 2, 3, 4, 5];
$tableauDesChainesDeCaracteres = ['a', 'b', 'c'];
// On stockera les memes types de variables
// On ne fait pas => $tableauBizare = [1, 'a', 2, 'b',];

// Lecture d'un tableau
// echo ça ne fonctionne plus
print_r($tableau);

// Pour avoir un affichage + agréable dans le navigateur
echo '<pre>';
print_r($tableau);
echo'</pre>';

// Accès à une valeur, on utilise les 'index'
// Dans un tableau le premier index est 0
echo $tableau[0]; // 1 valeur
echo '<br />';
echo $tableauDesChainesDeCaracteres[2]; // c

// remplir un tableau
$tableau[]= 6;
$tableau[]= 7;

echo '<pre>';
print_r($tableau);
echo'</pre>';

// tableaux de tableaus, 'multi dimensions'
$tableauDe2Dimensions = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo $tableauDe2Dimensions[1][1]; // 5
echo $tableauDe2Dimensions[2][0]; // 7

// Tableau associatifs
// On va créer les index nous même, avec des chaines de caractères
// Ces chaines de caractère sont ecrites en snake_case, tout en minuscules

$professeur = [
    'prenom' => 'Arthur',
    'nom' => 'Weill',
    'age' => 35
];

$phrase = '';
$phrase .= 'le professeur s\'appelle';
$phrase .= $professeur['prenom']