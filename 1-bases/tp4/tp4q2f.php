<?php
declare(strict_types=1);

function ordonnerDesc(mixed &$a, mixed &$b) : void {
    if($a<$b) {
        $t = $a;
        $a = $b;
        $b = $t;
    }
}