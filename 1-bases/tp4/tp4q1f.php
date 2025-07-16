<?php
declare(strict_types=1);

function nbEssaisPour(int $cible) : int {
    $nbTentatives = 1;
    while (rand(0, 999) != $cible)
        $nbTentatives++;
    return $nbTentatives;
}