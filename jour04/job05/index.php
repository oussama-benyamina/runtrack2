<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de connexion</title>
</head>
<body>

    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les valeurs saisies
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Vérifier les valeurs
        if ($username == "John" && $password == "Rambo") {
            echo "C'est pas ma guerre";
        } else {
            echo "Votre pire cauchemar";
        }
    }
    ?>

    <h2>Formulaire de connexion</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nom d'utilisateur: <input type="text" name="username"><br>
        Mot de passe: <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Se connecter">
    </form>

    <!-- Pourquoi utiliser POST plutôt que GET ? -->
    <p>
        Il est préférable d'utiliser la méthode POST plutôt que GET pour les formulaires de connexion ou tout autre formulaire contenant des données sensibles (mots de passe, informations personnelles, etc.). Voici les principales raisons :
    </p>
    <ul>
        <li><strong>Sécurité :</strong> Avec la méthode GET, les données sont transmises dans l'URL, ce qui les rend visibles et vulnérables aux attaques. Avec POST, les données sont transmises dans le corps de la requête HTTP, ce qui les rend plus sécurisées.</li>
        <li><strong>Longueur des données :</strong> La méthode GET a une limite de longueur pour les données transmises dans l'URL, ce qui peut poser des problèmes pour les formulaires avec beaucoup de champs. POST n'a pas cette limitation.</li>
        <li><strong>Confidentialité :</strong> Les données transmises avec GET sont stockées dans l'historique du navigateur et les journaux du serveur, ce qui peut poser des problèmes de confidentialité. Avec POST, les données ne sont pas stockées dans l'historique du navigateur.</li>
    </ul>

</body>
</html>
