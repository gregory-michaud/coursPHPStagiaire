<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 1 question 2</title>
        <link href="../../style/style.css" rel="stylesheet">
        <link href="../../style/correction.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <a href="./index.php" class="precedent">Retour au TP</a>
        <h1>TP 1 : Formulaires</h1>
        <h2>Question 2</h2>
        <section class="enonce">Améliorer le script précédent en vérifiant la présence des données et en affichant une boîte d'alerte JavaScript si l'une des données est manquante.</section>
            <?php
            require_once '../../afficheCode.php';
            afficheCode(['fichiers' => ['tp1q2.js', 'tp1q2.php', 'tp1q1.php'], 'nomFichier' => true, 'nomFichier' => true, 'execution' => 'tp1q2.php', 'correction' => true, 'commentaires' => 'Le script JS recherche toutes les balises input ayant un attribut <code>required</code>. Lorsque l\'un de ceux-ci perd le focus, il vérifie que le champ est bien complété.']);
            ?>
    </body>
</html>
