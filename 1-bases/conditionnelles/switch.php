<?php
$i = 7;

// forme bloc
switch ($i) {
    case 1:
        echo '<p>un</p>';
        break;
    case 2:
        echo '<p>deux</p>';
        break;
    case 3:
        echo '<p>trois</p>';
        break;
    default:
        echo '<p>ni un, ni deux, ni trois</p>';
        break;
}

// forme alternative
switch ($i):
    case 1:
        echo '<p>un</p>';
        break;
    case 2:
        echo '<p>deux</p>';
        break;
    case 3:
        echo '<p>trois</p>';
        break;
    default:
        echo '<p>ni un, ni deux, ni trois</p>';
        break;
endswitch;
