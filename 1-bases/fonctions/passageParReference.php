<?php
declare(strict_types=1);

function multiplieReference(float &$valeur, float $multiplicateur) : void {
    $valeur *= $multiplicateur;
    echo 'Valeur multipliée dans la fonction : ' . $valeur . '<br>';
}

$valeur = 10;
echo 'Valeur avant la fonction : ' . $valeur . '<br>';
multiplieReference($valeur, 2);
echo 'Valeur après la fonction : ' . $valeur . '<br>';
