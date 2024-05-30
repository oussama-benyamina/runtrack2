<?php
// Vérifier si le cookie existe
if (isset($_COOKIE['nbvisites'])) {
    $nbvisites = $_COOKIE['nbvisites'];
} else {
    $nbvisites = 0; // Initialiser à 0 si le cookie n'existe pas
}

// Incrémenter le compteur
$nbvisites++;

// Définir le cookie avec une durée de vie de 30 jours
setcookie('nbvisites', $nbvisites, time() + (30 * 24 * 60 * 60));

// Vérifier si le bouton "reset" a été cliqué
if (isset($_POST['reset'])) {
    setcookie('nbvisites', 0, time() - 3600); // Réinitialiser le cookie
    $nbvisites = 0;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Compteur de visites</title>
</head>
<body>
    <h1>Compteur de visites</h1>
    <p>Nombre de visites : <?php echo $nbvisites; ?></p>

    <form method="post">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>