<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <?php foreach ($tab_v as $v): ?>
        <p>Voiture d'immatriculation <a href="?action=read&immat=<?= $v->getImmatriculation() ?>"><?= $v->getImmatriculation() ?></a></p>
        <?php endforeach; ?>
    </body>
</html>