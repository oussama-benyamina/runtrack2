<?php
// Créer une variable de type string
$str = "Dans l'espace, personne ne vous entend crier";

// Initialiser un compteur pour le nombre de caractères
$nbCaracteres = 0;

// Parcourir la chaîne et compter les caractères
for ($i = 0; $i < strlen($str); $i++) {
    $nbCaracteres++;
}

// Afficher le nombre de caractères
echo "Le nombre de caractères dans la chaîne est : " . $nbCaracteres;
?>
