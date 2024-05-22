<?php
$hauteur = 5; // Hauteur du triangle (modifiable)

// Boucle pour chaque ligne du triangle
for ($i = 1; $i <= $hauteur; $i++) {
    // Afficher les espaces avant les étoiles
    for ($j = 1; $j <= $hauteur - $i; $j++) {
        echo "&nbsp;"; // Entité HTML pour un espace
    }
    
    // Afficher les étoiles
    for ($k = 1; $k <= 2 * $i - 1; $k++) {
        echo "*";
    }
    
    echo "<br>"; // Retour à la ligne
}
?>