<?php
$nb = 7;

echo '<p>il y a ' . $nb . ' élément';
if ($nb > 1)
    echo 's';
echo '</p>';

// version plus courte grâce à l'opérateur ternaire ? :
echo '<p>il y a ' . $nb . ' élément' . ($nb > 1 ? 's' : '') . '</p>';
