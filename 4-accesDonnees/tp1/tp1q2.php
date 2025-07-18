<form action="" method="POST">
    <fieldset>
        <legend>Ajouter un nouveau modèle</legend>
        <label for="id">Identifiant :</label>
        <input id="id" name="id">
        <label for="marque">Marque :</label>
        <input id="marque" name="marque">
        <label for="modele">Modèle :</label>
        <input id="modele" name="modele">
        <div>
            <input id="essence" name="carburant" value="essence" type="radio">
            <label for="essence">Essence</label>
        </div>
        <div>
            <input id="diesel" name="carburant" value="diesel" type="radio">
            <label for="diesel">Diesel</label>
        </div>
        <div>
            <input id="gpl" name="carburant" value="gpl" type="radio">
            <label for="gpl">GPL</label>
        </div>
        <div>
            <input id="electrique" name="carburant" value="electrique" type="radio">
            <label for="electrique">Electrique</label>
        </div>
        <input type="submit" name="ajouter" value="Ajouter">
    </fieldset>
</form>