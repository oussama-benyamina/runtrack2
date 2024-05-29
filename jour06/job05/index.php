<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec Styles</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <?php
        $style = isset($_POST['style']) ? $_POST['style'] : 'style1';
        echo "<link id='styleSheet' rel='stylesheet' href='{$style}.css'>";
    ?>
</head>
<body>
    <div class="container mt-5">
        <form method="post" action="" class="p-4 border rounded">
            <div class="form-group">
                <label for="style">Choisissez un style :</label>
                <select name="style" id="style" class="form-control">
                    <option value="style1" <?php echo ($style == 'style1') ? 'selected' : ''; ?>>style1</option>
                    <option value="style2" <?php echo ($style == 'style2') ? 'selected' : ''; ?>>style2</option>
                    <option value="style3" <?php echo ($style == 'style3') ? 'selected' : ''; ?>>style3</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
