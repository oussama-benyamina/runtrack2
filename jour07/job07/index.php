<!DOCTYPE html>
<html>
<head>
    <title>Transformations de chaînes</title>
</head>
<body>
    <h1>Transformations de chaînes</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="str">Chaîne de caractères :</label>
        <input type="text" name="str" id="str" required>
        <br><br>
        <label for="fonction">Fonction :</label>
        <select name="fonction" id="fonction">
            <option value="gras">Gras</option>
            <option value="cesar">Cesar</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <br><br>
        <button type="submit">Appliquer</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST["str"];
        $fonction = $_POST["fonction"];

        switch ($fonction) {
            case "gras":
                echo gras($str);
                break;
            case "cesar":
                echo cesar($str, 2); // Décalage de 2 par défaut
                break;
            case "plateforme":
                echo plateforme($str);
                break;
        }
    }

    function gras($str) {
        $words = explode(" ", $str);
        $result = "";
        foreach ($words as $word) {
            if (ctype_upper($word[0])) {
                $result .= "<b>$word</b> ";
            } else {
                $result .= "$word ";
            }
        }
        return trim($result);
    }

    function cesar($str, $decalage = 2) {
        $result = "";
        for ($i = 0; $i < strlen($str); $i++) {
            $char = $str[$i];
            if (ctype_alpha($char)) {
                $result .= chr(ord($char) + $decalage > ord('z') ? ord($char) + $decalage - 26 : ord($char) + $decalage);
            } else {
                $result .= $char;
            }
        }
        return $result;
    }

    function plateforme($str) {
        $words = explode(" ", $str);
        $result = "";
        foreach ($words as $word) {
            if (substr($word, -2) == "me") {
                $result .= "$word" . "_" . " ";
            } else {
                $result .= "$word ";
            }
        }
        return trim($result);
    }
    ?>
</body>
</html>
