<?php
declare(strict_types=1);

require_once 'tp4q2f.php';

function pgcd(int $a, int $b) : int {
    ordonnerDesc($a, $b);
    do {
        $r = $a % $b;
        $a = $b;
        $b = $r;
    } while ($r !== 0);
    return $a;
}
