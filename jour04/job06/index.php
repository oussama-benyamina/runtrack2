<!DOCTYPE html>
<html>
<head>
    <title>Vérifier si un nombre est pair ou impair</title>
</head>
<body>

    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["nombre"])) {
        $nombre = $_GET["nombre"];

        // Vérifier si la valeur entrée est un nombre
        if (is_numeric($nombre)) {
            // Vérifier si le nombre est pair ou impair
            if ($nombre % 2 == 0) {
                echo "Nombre pair";
            } else {
                echo "Nombre impair";
            }
        } else {
            echo "Veuillez entrer un nombre valide.";
        }
    }
    ?>

    <h2>Vérifier si un nombre est pair ou impair</h2>
    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Entrez un nombre: <input type="number" name="nombre"><br>
        <input type="submit" name="submit" value="Vérifier">
    </form>

</body>
</html>
