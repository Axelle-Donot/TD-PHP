<form method="post" action="index.php?action=updated">
    <fieldset>
        <legend>Mon formulaire :</legend>
        <p>
            <label for="immat_id">Immatriculation</label> :
            <input type="text" value="<?php echo htmlspecialchars($v->getImmatriculation()); ?>" name="immatriculation" id="immat_id" readonly/>
        </p>
        <p>
            <label for="couleur_id">Couleur</label> :
            <input type="text" value="<?php echo htmlspecialchars($v->getCouleur()); ?>" name="couleur" id="couleur_id" required/>
        </p>
        <p>
            <label for="marque_id">Marque</label> :
            <input type="text" value="<?php echo htmlspecialchars($v->getMarque()); ?>" name="marque" id="marque_id" required/>
        </p>
        <p>
            <input type="submit" value="Envoyer" />
        </p>
    </fieldset>
</form>
