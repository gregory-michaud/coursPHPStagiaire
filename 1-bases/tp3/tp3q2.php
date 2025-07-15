<?php
echo '<h5>Version sans prise en compte des accents</h5><pre style="font-family: courier">';
$personnes = array(array('Norbert', 'DURAND'), array('Melanie', 'MALALANICHE'), array('Juste', 'LE BLANC'));
foreach ($personnes as $p) {
    printf("%-20s%-20s<br>", $p[0], $p[1]);
}
echo '</pre><h5>Version avec prise en compte des accents</h5><pre style="font-family: courier">';
$personnes = array(array('Norbert', 'DURAND'), array('Mélanie', 'MALALANICHE'), array('Juste', 'LE BLANC'));
foreach ($personnes as $p) {
    echo $p[0] . str_repeat(' ', 20 - mb_strlen($p[0])) . $p[1] . '<br>';
}
echo '</pre>';
