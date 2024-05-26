
<?php
// Initialisation de la variable
$str = "Les choses que l'on possede finissent par nous posseder.";

## Fonction pour inverser la chaîne
function reverseString($str) {
    $reversed = ""; // Initialisation d'une chaîne vide
    
    // Parcourir la chaîne de la fin vers le début
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i]; // Ajouter chaque caractère à la chaîne inversée
    }
    
    return $reversed;
}

// Appel de la fonction et affichage du résultat
$reversedStr = reverseString($str);
echo "Chaîne originale : " . $str . "\n <br />";
echo "Chaîne inversée : " . $reversedStr;
?>