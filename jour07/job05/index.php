<?php
function occurrences($str, $char) {
    // Vérifie que $char est un seul caractère
    if (strlen($char) != 1) {
        return "Erreur : Le deuxième paramètre doit être un seul caractère.";
    }
    return substr_count($str, $char);
}

// Appels de la fonction pour tester
echo occurrences("Bonjour", "o");  // Devrait afficher 2
echo "<br>";
echo occurrences("Bonjour", "B");  // Devrait afficher 1
echo "<br>";
echo occurrences("Bonjour", "z");  // Devrait afficher 0
echo "<br>";
echo occurrences("Bonjour", "");   // Devrait afficher une erreur
?>
