<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dessiner une maison</title>
    <style>
        .maison {
            font-family: monospace;
            white-space: pre;
        }
    </style>
</head>
<body>
    <h2>Dessiner une maison</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Largeur: <input type="text" name="largeur"><br><br>
        Hauteur: <input type="text" name="hauteur"><br><br>
        <input type="submit" name="submit" value="Dessiner">
    </form>

    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $largeur = $_POST["largeur"];
        $hauteur = $_POST["hauteur"];

        // Vérifier si les valeurs sont des nombres entiers positifs
        if (is_numeric($largeur) && is_numeric($hauteur) && $largeur > 0 && $hauteur > 0) {
            $largeur = intval($largeur);
            $hauteur = intval($hauteur);

            // Dessiner le toit
            $toit = "";
            for ($i = 0; $i < $largeur / 2; $i++) {
                $toit .= str_repeat(" ", $largeur / 2 - $i - 1) . "/" . str_repeat("_", 2 * $i) . "\\" . "\n";
            }

            // Dessiner les murs
            $murs = "";
            for ($i = 0; $i < $hauteur; $i++) {
                $murs .= "|" . str_repeat(" ", $largeur - 2) . "|\n";
            }

            // Dessiner la base
            $base = str_repeat("-", $largeur);

            // Afficher la maison
            echo "<pre class='maison'>" . $toit . $murs . $base . "</pre>";
        } else {
            echo "Veuillez entrer des valeurs numériques positives pour la largeur et la hauteur.";
        }
    }
    ?>
</body>
</html>
