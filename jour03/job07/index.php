<?php
// Initialisation de la variable
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Fonction pour décaler les caractères
function shiftCharacters($str) {
    $length = strlen($str);
    $shifted = ""; // Initialisation d'une chaîne vide
    
    // Décaler les caractères
    for ($i = 0; $i < $length; $i++) {
        $nextIndex = ($i + 1) % $length; // Indice du prochain caractère (modulo pour revenir au début)
        $shifted .= $str[$nextIndex]; // Ajouter le prochain caractère à la chaîne décalée
    }
    
    return $shifted;
}

// Appel de la fonction et affichage du résultat
$shiftedStr = shiftCharacters($str);
echo "Chaîne originale : " . $str . "\n <br />";
echo "Chaîne décalée : " . $shiftedStr;
?>