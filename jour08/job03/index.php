<?php
// Démarrer la session
session_start();

// Vérifier si la variable de session existe
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = array(); // Initialiser un tableau vide
}

// Ajouter le prénom à la variable de session
if (isset($_POST['prenom'])) {
    $prenom = trim($_POST['prenom']);
    if (!empty($prenom)) {
        $_SESSION['prenoms'][] = $prenom;
    }
}

// Réinitialiser la variable de session
if (isset($_POST['reset'])) {
    unset($_SESSION['prenoms']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste de prénoms</title>
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
        
        ul {
            list-style-type: none;
            padding: 0;
        }
        
        li {
            background-color: #fff;
            padding: 10px;
            border-radius: 3px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Liste de prénoms</h1>

    <form method="post">
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required>
        <input type="submit" value="Ajouter">
    </form>

    <?php if (!empty($_SESSION['prenoms'])): ?>
        <h2>Prénoms enregistrés :</h2>
        <ul>
            <?php foreach ($_SESSION['prenoms'] as $prenom): ?>
                <li><?php echo $prenom; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Aucun prénom enregistré.</p>
    <?php endif; ?>

    <form method="post">
        <input type="submit" name="reset" value="Réinitialiser">
    </form>
</body>
</html>