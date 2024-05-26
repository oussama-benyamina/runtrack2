<!DOCTYPE html>
<html>
<head>
    <title>Afficher les arguments POST</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Afficher le tableau HTML
        echo "<table>";
        echo "<tr><th>Argument</th><th>Valeur</th></tr>";

        // Parcourir les arguments POST
        foreach ($_POST as $argument => $valeur) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($argument) . "</td>";
            echo "<td>" . htmlspecialchars($valeur) . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Aucune donnée POST reçue.";
    }
    ?>

    <!-- Formulaire HTML pour tester -->
    <h2>Formulaire de test</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Prénom: <input type="text" name="prenom"><br>
        Nom: <input type="text" name="nom"><br>
        Email: <input type="text" name="email"><br>
        <input type="submit" name="submit" value="Envoyer">
    </form>

</body>
</html>
