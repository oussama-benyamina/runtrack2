<?php
    function calcule($a , $operation , $b ){
        switch ($operation) {
            case '+':
                return $a + $b;
            case '-':
                return $a - $b;
            case '*':
                return $a * $b;
            case '/':
                if($b !=0){
                return $a / $b;
                }
               else{
                return "Erreur : Division par zéro";
               }
            case '%':
                if ($b !=0) {
                return $a % $b;
                } else {
                    return "Erreur : Division par zéro";
                }
            dafault:
        }    return "Erreur : Opération invalide";
    }

// Appels de la fonction pour tester
echo calcule(10, '+', 5);  // Devrait afficher 15
echo "<br>";
echo calcule(10, '-', 5);  // Devrait afficher 5
echo "<br>";
echo calcule(10, '*', 5);  // Devrait afficher 50
echo "<br>";
echo calcule(10, '/', 5);  // Devrait afficher 2
echo "<br>";
echo calcule(10, '/', 0);  // Devrait afficher "Erreur : Division par zéro"
echo "<br>";
echo calcule(10, '%', 3);  // Devrait afficher 1
echo "<br>";
echo calcule(10, '%', 0);  // Devrait afficher "Erreur : Division par zéro"
echo "<br>";
echo calcule(10, '^', 5);  // Devrait afficher "Erreur : Opération invalide"
?>