<?php
    function direBonjour($jour){
        if($jour) {
            echo "Bonjour";
        } 
        else {
            echo "Bonsoir";
            }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    // Appels de la fonction pour tester
    direBonjour(true);  // Devrait afficher "Bonjour"
    echo "<br>";
    direBonjour(false); // Devrait afficher "Bonsoir"
?>

    
</body>
</html>