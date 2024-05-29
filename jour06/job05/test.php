<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire avec styles</title>
  <link id="styleLink" rel="stylesheet" href="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    <?php
    // Inclure le CSS de base
    include 'base.css';
    ?>
  </style>
</head>
<body>
  <form id="styleForm" method="post">
    <label for="styleSelect">Choisissez un style :</label>
    <select id="styleSelect" name="style">
      <option value="style1">Style 1</option>
      <option value="style2">Style 2</option>
      <option value="style3">Style 3</option>
    </select>
    <button type="submit">Appliquer le style</button>
  </form>

  <?php
  // Vérifier si le formulaire a été soumis
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedStyle = $_POST['style'];
    // Inclure le fichier CSS correspondant au style sélectionné
    include "$selectedStyle.css";
  }
  ?>

  <script>
    const styleForm = document.getElementById('styleForm');
    const styleSelect = document.getElementById('styleSelect');
    const styleLink = document.getElementById('styleLink');

    styleForm.addEventListener('submit', (event) => {
      event.preventDefault();
      const selectedStyle = styleSelect.value;
      styleLink.href = `${selectedStyle}.css`;
      styleForm.submit(); // Soumettre le formulaire après avoir changé le style
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>