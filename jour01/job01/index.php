
<?php
// Partie 1
$str = "LaPlateforme";
echo $str . "<br>";

$str2 = "Vive";
$str3 = "!";
echo $str2 . " " . $str . " " . $str3 . "<br>";

// Partie 2
$val = 6;
echo "Valeur initiale de val : " . $val . "<br>";
$val += 4;
echo "Valeur de val après l'ajout de 4 : " . $val . "<br>";

// Partie 3
$myBool = true;
echo "Valeur initiale de myBool : " . ($myBool ? 'true' : 'false') . "<br>";
$myBool = false;
echo "Nouvelle valeur de myBool : " . ($myBool ? 'true' : 'false') . "<br>";
?>