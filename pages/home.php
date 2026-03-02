<?php
// Petite variable pour test
$nom = "Visiteur";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>

    <h1>Bienvenue sur mon site</h1>

    <p>
        <?php
        echo "Salut " . $nom . ", content de te voir ici !";
        ?>
    </p>

    <p>On est le <?php echo date("d/m/Y"); ?>.</p>

</body>
</html>