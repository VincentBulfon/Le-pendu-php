<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= GAME_TITLE ?></title> <!-- a rendre dynamique -->
</head>
<body>
    <div>
        <h1>Le pendu : touve le mot en moins de <?= MAX_TRIALS ?> coups</h1>
    </div>
    <div>
        <p>Le mot à deviner compte <?= $numberOfLetters ?> lettres : <?= $blurredWord ?></p>
    </div>
    <div>
        <img src="../images/pendu0.gif" srcset="" alt="#TODO">
    </div>
    <div>
        <!-- Si on joue ->insérer formulaire, si on a perdu insérer le message de défaite, si on à gagné insérer le message de victoire -->
        <div>
            <?php include 'partials/form.php' ?>
        </div>
    </div>
</body>
</html>