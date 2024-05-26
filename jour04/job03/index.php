<!DOCTYPE html>
<html>
<head>
    <title>Formulaire POST</title>
</head>
<body>
    <h1>Formulaire POST</h1>
    <form action="traitement.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom"><br><br>

        <label for="email">Email :</label>
        <input type="text" id="email" name="email"><br><br>

        <input type="submit" value="Envoyer">
    </form>
    <?php
    // Compter le nombre d'arguments POST
    $nbArguments = count($_POST);

    // Afficher le résultat
    echo "Le nombre d'arguments POST envoyés est : " . $nbArguments;
    ?>
</body>
</html>
