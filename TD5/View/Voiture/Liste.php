<?php foreach ($tab_v as $v): ?>
    <p>Voiture d'immatriculation <a href="index.php?action=read&immat=<?= rawurlencode($v->getImmatriculation()) ?>"> <?= htmlspecialchars($v->getImmatriculation()) ?></a></p>
<?php endforeach; ?>
