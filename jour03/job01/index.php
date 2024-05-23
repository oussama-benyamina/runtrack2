<!DOCTYPE html>
<html>
<head>
    <title>Nombres pairs et impairs</title>
    <style>
        table {
            border-collapse: collapse;
            width: 30%;
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
    // Créer un tableau contenant les nombres
    $nombres = array(200, 204, 173, 98, 171, 404, 459);
    ?>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Pair/Impair</th>
        </tr>
        <?php
        // Parcourir le tableau
        foreach ($nombres as $nombre) {
            // Vérifier si le nombre est pair ou impair
            $etatNombre = ($nombre % 2 == 0) ? "Pair" : "Impair";
            echo "<tr>";
            echo "<td>$nombre</td>";
            echo "<td>$etatNombre</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
