<form action="tp1traitement.php" method="POST">
    <fieldset>
        <legend>Adresse client</legend>
        <label for="nom">Nom : </label>
        <input id="nom" name="nom" required><br>
        <label for="prenom">Prénom : </label>
        <input id="prenom" name="prenom"><br>
        <label for="adresse">Adresse : </label>
        <input id="adresse" name="adresse"><br>
        <label for="cp">CP : </label>
        <input id="cp" name="cp" required><br>
        <label for="ville">Ville : </label>
        <input id="ville" name="ville" required><br>
        <input type="submit" name="Envoyer le formulaire" value="Envoyer le formulaire">
    </fieldset>
</form>