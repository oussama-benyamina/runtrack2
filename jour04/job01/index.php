<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire GET</title>
</head>
<body>
    <form action="" method="get">
        <label for="champ1">Champ 1:</label>
        <input type="text" id="champ1" name="champ1"><br><br>
        <label for="champ2">Champ 2:</label>
        <input type="text" id="champ2" name="champ2"><br><br>
        <label for="champ3">Champ 3:</label>
        <input type="text" id="champ3" name="champ3"><br><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    // Script PHP pour compter et afficher le nombre d'arguments GET
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // Compter le nombre d'arguments GET
        $nombre_arguments_get = count($_GET);

        // Afficher le nombre d'arguments GET
        echo "Le nombre d'arguments GET envoyé est : " . $nombre_arguments_get;
    }
    ?>
</body>
</html>
