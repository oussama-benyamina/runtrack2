<?php
// Vérifier si le cookie existe
if (isset($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom'];
} else {
    $prenom = ''; // Initialiser à une chaîne vide
}

// Traiter la soumission du formulaire de connexion
if (isset($_POST['prenom'])) {
    $prenom = trim($_POST['prenom']);
    setcookie('prenom', $prenom, time() + (30 * 24 * 60 * 60)); // Définir le cookie avec une durée de vie de 30 jours
}

// Traiter la déconnexion
if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600); // Supprimer le cookie
    $prenom = '';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de connexion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        
        h1 {
            color: #333;
            text-align: center;
        }
        
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }
        
        input[type="text"],
        input[type="submit"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php if (empty($prenom)): ?>
        <h1>Connexion</h1>
        <form method="post">
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" required>
            <input type="submit" name="connexion" value="Connexion">
        </form>
    <?php else: ?>
        <h1>Bienvenue, <?php echo $prenom; ?> !</h1>
        <form method="post">
            <input type="submit" name="deco" value="Déconnexion">
        </form>
    <?php endif; ?>
</body>
</html>