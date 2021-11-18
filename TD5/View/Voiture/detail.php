<?php
    echo '<p> Voiture d\'immatriculation' . htmlspecialchars($v->getImmatriculation()); echo ' de couleur ' . htmlspecialchars($v->getCouleur()); echo ' et de marque '  . htmlspecialchars($v->getMarque());  '. </p>';

    echo "<p><a href=\"?action=update&immat=" . rawurlencode($v->getImmatriculation()) . '">Modifier la voiture </a></p>';
    echo "<p><a href=\"?action=delete&immat=" . rawurlencode($v->getImmatriculation()) . '">Supprimer la voiture </a></p>';
?>  