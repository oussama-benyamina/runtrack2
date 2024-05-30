<?php
session_start();

// Initialiser la grille du jeu si elle n'existe pas encore ou si on demande une réinitialisation
if (!isset($_SESSION['grid']) || isset($_POST['reset'])) {
    $_SESSION['grid'] = array_fill(0, 3, array_fill(0, 3, '-'));
    $_SESSION['currentPlayer'] = 'X';
    $_SESSION['winner'] = null;
}

// Fonction pour vérifier s'il y a un gagnant
function checkWinner($grid) {
    // Vérifier les lignes, colonnes et diagonales
    for ($i = 0; $i < 3; $i++) {
        if ($grid[$i][0] === $grid[$i][1] && $grid[$i][1] === $grid[$i][2] && $grid[$i][0] !== '-') {
            return $grid[$i][0];
        }
        if ($grid[0][$i] === $grid[1][$i] && $grid[1][$i] === $grid[2][$i] && $grid[0][$i] !== '-') {
            return $grid[0][$i];
        }
    }
    if ($grid[0][0] === $grid[1][1] && $grid[1][1] === $grid[2][2] && $grid[0][0] !== '-') {
        return $grid[0][0];
    }
    if ($grid[0][2] === $grid[1][1] && $grid[1][1] === $grid[2][0] && $grid[0][2] !== '-') {
        return $grid[0][2];
    }
    return null;
}

// Fonction pour vérifier s'il y a un match nul
function checkDraw($grid) {
    foreach ($grid as $row) {
        if (in_array('-', $row)) {
            return false;
        }
    }
    return true;
}

// Gérer les clics des joueurs
if (isset($_POST['cell']) && $_SESSION['winner'] === null) {
    $cell = explode(',', $_POST['cell']);
    $row = $cell[0];
    $col = $cell[1];
    if ($_SESSION['grid'][$row][$col] === '-') {
        $_SESSION['grid'][$row][$col] = $_SESSION['currentPlayer'];
        $_SESSION['winner'] = checkWinner($_SESSION['grid']);
        if ($_SESSION['winner'] === null && checkDraw($_SESSION['grid'])) {
            $_SESSION['winner'] = 'draw';
        }
        $_SESSION['currentPlayer'] = $_SESSION['currentPlayer'] === 'X' ? 'O' : 'X';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jeu du Morpion</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            border: 1px solid black;
            width: 60px;
            height: 60px;
            text-align: center;
        }
        button {
            width: 100%;
            height: 100%;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Jeu du Morpion</h1>
    <form method="post" action="">
        <table>
            <?php for ($i = 0; $i < 3; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++): ?>
                        <td>
                            <?php if ($_SESSION['grid'][$i][$j] === '-'): ?>
                                <button type="submit" name="cell" value="<?php echo $i . ',' . $j; ?>">
                                    -
                                </button>
                            <?php else: ?>
                                <?php echo $_SESSION['grid'][$i][$j]; ?>
                            <?php endif; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
        <div style="text-align: center;">
            <button type="submit" name="reset">Réinitialiser la partie</button>
        </div>
    </form>

    <div style="text-align: center;">
        <?php if ($_SESSION['winner'] === 'X' || $_SESSION['winner'] === 'O'): ?>
            <p><?php echo $_SESSION['winner']; ?> a gagné !</p>
        <?php elseif ($_SESSION['winner'] === 'draw'): ?>
            <p>Match nul !</p>
        <?php endif; ?>
    </div>
</body>
</html>
