<?php
// Définir la chaîne de caractères
$str = "I'm sorry Dave I'm afraid I can't do that";

// Définir les voyelles, y compris 'y' et 'Y'
$voyelles = "aeiouyAEIOUY";

// Initialiser une variable pour stocker les voyelles trouvées
$onlyVowels = "";

// Parcourir chaque caractère de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    // Vérifier si le caractère actuel est une voyelle
    if (strpos($voyelles, $str[$i]) !== false) {
        // Ajouter la voyelle à la variable $onlyVowels
        $onlyVowels .= $str[$i];
    }
}

// Afficher les voyelles trouvées
echo $onlyVowels;
?>
