<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 1 question 3</title>
        <link href="../../style/style.css" rel="stylesheet">
        <link href="../../style/correction.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <a href="./index.php" class="precedent">Retour au TP</a>
        <h1>TP 1 : Formulaires</h1>
        <h2>Question 3</h2>
        <section class="enonce">Créer un formulaire de saisie d'adresse e-mail contenant un champ caché destiné à récupérer le type du navigateur de l'utilisateur. Le code PHP affiche l'adresse mail et le nom du navigateur dans la même page après vérification de l'existence des données.</section>
            <?php
            require_once '../../afficheCode.php';
            afficheCode(['fichiers' => ['tp1q3.php'], 'execution' => 'tp1q3.php', 'correction' => filter_input(INPUT_POST, 'Valider', FILTER_SANITIZE_SPECIAL_CHARS)?2:true, 'commentaires' => 'Le script commence par distinguer deux cas :<ul><li>Soit le formulaire n\'a pas encore été envoyé, il est alors affiché</li><li>Soit le formulaire a été transmis, la page affiche donc les données traitées.</li></ul>Pour cela, l\'existence d\'une valeur « valider » est testée. Cette valeur est celle du bouton permettant l\'envoi du formulaire.<br>L\'instruction <code>$_SERVER[\'HTTP_USER_AGENT\']</code> permet d\'obtenir le type de navigateur utilisé.']);
            ?>
    </body>
</html>
