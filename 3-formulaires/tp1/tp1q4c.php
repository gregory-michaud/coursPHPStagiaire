<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 1 question 4</title>
        <link href="../../style/style.css" rel="stylesheet">
        <link href="../../style/correction.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <a href="./index.php" class="precedent">Retour au TP</a>
        <h1>TP 1 : Formulaires</h1>
        <h2>Question 4 :</h2>
        <section class="enonce">Créer un formulaire demandant la saisie d'un prix HT et d'un taux de TVA. 
            Le script affiche le montant de la TVA et le prix TTC dans deux zones de 
            texte créées dynamiquement. Le formulaire maintient les données saisies.</section>
            <?php
            require_once '../../afficheCode.php';
            afficheCode(['fichiers' => ['tp1q4.php'], 'execution' => 'tp1q4.php', 'correction' => isset($_POST['Calculer'])?2:true, 'commentaires' => 'Les valeurs saisies sont filtrées pour accepter uniquement des nombres réels. Attention le filtre <a href="https://www.php.net/manual/fr/filter.filters.sanitize.php"><code>FILTER_SANITIZE_NUMBER_FLOAT</code></a> ne suffit pas. Pour accepter une partie décimale, il faut lui adjoindre le drapeau <a href="https://www.php.net/manual/fr/filter.filters.sanitize.php"><code>FILTER_FLAG_ALLOW_FRACTION</code></a>.<br>Pour maintenir les valeurs dans les champs de saisie, celles-ci sont ajoutées dans l\'attribut <code>value</code> des balises input.']);
            ?>
    </body>
</html>
