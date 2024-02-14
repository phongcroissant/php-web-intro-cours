<?php
// On récupère le paramètre d'URL "prenom"
// Tester la présence du paramètre
$prenom = null;
if (isset($_GET["prenom"])) {
    $prenom = $_GET["prenom"];
}
$nom = null;
if (isset($_GET["nom"])) {
    $nom = $_GET["nom"];
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Récupérations des paramètres d'URL</h1>
<p>
    <?php if ($prenom && $nom): ?>
<p>Je m'appelle <?= $prenom . " " . strtoupper($nom) ?></p>
<?php else: ?>
    <p>Le paramètre prénom et nom sont obligatoires</p>
<?php endif ?>
</p>

</body>
</html>