

<?php
// Définition de la hauteur du triangle
$hauteur = 5;

// Boucle pour afficher les lignes du triangle
for ($i = 1; $i <= $hauteur; $i++) {
    // Boucle pour afficher les espaces avant les étoiles
    for ($j = 1; $j <= $hauteur - $i; $j++) {
        echo "&nbsp;"; // Afficher un espace insécable
    }

    // Boucle pour afficher les étoiles dans chaque ligne
    for ($k = 1; $k <= ($i * 2) - 1; $k++) {
        if ($k == 1 || $k == ($i * 2) - 1) {
            echo "*"; // Afficher une étoile pour le contour
        } else {
            echo "&nbsp;"; // Afficher un espace insécable pour l'intérieur
        }
    }

    echo "<br />";
}
?>
