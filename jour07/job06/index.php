<?php
function leetSpeak($str) {
    // Tableau des remplacements
    $leet = [
        'A' => '4', 'a' => '4',
        'B' => '8', 'b' => '8',
        'E' => '3', 'e' => '3',
        'G' => '6', 'g' => '6',
        'L' => '1', 'l' => '1',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7'
    ];
    
    // Remplacer chaque caractère par son équivalent leet
    $str = str_replace(array_keys($leet), array_values($leet), $str);
    
    return $str;
}

// Appels de la fonction pour tester
echo leetSpeak("Bonjour");  // Devrait afficher "8onj0ur"
echo "<br>";
echo leetSpeak("Hello World!");  // Devrait afficher "H3110 W0r1d!"
echo "<br>";
echo leetSpeak("This is a test");  // Devrait afficher "7hi5 i5 4 7357"
?>
