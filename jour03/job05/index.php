<?php
// Initialiser la chaîne de caractères
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

// Initialiser le dictionnaire pour stocker les occurrences
$dic = [
    "consonnes" => 0,
    "voyelles" => 0
];

// Définir les voyelles
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'à', 'â', 'é', 'è', 'ê', 'ë', 'î', 'ï', 'ô', 'û', 'ü'];

// Parcourir chaque caractère de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    $char = strtolower($str[$i]); // Convertir en minuscule pour uniformité

    if (ctype_alpha($char)) { // Vérifier si c'est une lettre
        if (in_array($char, $voyelles)) {
            $dic['voyelles']++;
        } else {
            $dic['consonnes']++;
        }
    }
}

// Afficher les résultats dans un tableau HTML
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compte des voyelles et consonnes</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        thead {
            background-color: #f2f2f2;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dic['voyelles']; ?></td>
                <td><?php echo $dic['consonnes']; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
