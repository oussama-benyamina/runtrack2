<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire GET</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <form action="" method="get">
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom"><br><br>
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom"><br><br>
        <label for="age">Âge:</label>
        <input type="text" id="age" name="age"><br><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    // Script PHP pour afficher les arguments GET et leurs valeurs dans un tableau HTML
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET)) {
        echo '<table>';
        echo '<thead><tr><th>Argument</th><th>Valeur</th></tr></thead>';
        echo '<tbody>';
        foreach ($_GET as $key => $value) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($key) . '</td>';
            echo '<td>' . htmlspecialchars($value) . '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    }
    ?>
</body>
</html>
