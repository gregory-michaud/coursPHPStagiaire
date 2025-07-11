<?php
$i = 4;

echo "<p>$i";

switch ($i) {
    case 4:
        echo ' est un nombre pair et de plus';
    case 1:
    case 9:
        echo ' est un carré parfait</p>';
        break;
    case 2:
    case 6:
    case 8:
    case 10:
        echo ' est un nombre pair</p>';
        break;
    default:
        echo ' est ni pair, ni un carré parfait</p>';
        break;
}