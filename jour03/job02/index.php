<?php
// Créer une variable de type string
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Initialiser une variable pour stocker la nouvelle chaîne
$nouvelleChaine = "";

// Parcourir la chaîne en affichant un caractère sur deux
for ($i = 0; $i < strlen($str); $i += 2) {
    $nouvelleChaine .= $str[$i];
}

// Afficher la nouvelle chaîne
echo $nouvelleChaine;
?>
