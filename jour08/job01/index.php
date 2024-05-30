<?php
// Démarrer la session
session_start();

// Vérifier si la variable de session existe
if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0; // Initialiser à 0 si elle n'existe pas
}

// Incrémenter la variable de session
$_SESSION['nbvisites']++;

// Afficher le contenu de la variable
echo "Nombre de visites : " . $_SESSION['nbvisites'];

// Vérifier si le bouton "reset" a été cliqué
if (isset($_POST['reset'])) {
    unset($_SESSION['nbvisites']); // Réinitialiser la variable de session
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Compteur de visites</title>
</head>
<body>
    <h1>Compteur de visites</h1>

    <form method="post">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>