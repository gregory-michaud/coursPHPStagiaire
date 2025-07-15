<?php
ini_set('date.timezone', 'Europe/Paris');
echo '<ul>';
for ($i = 2024; $i <= 2037; $i++) {
    $paques = easter_date($i);
    $ascension = $paques + 39 * 24 * 60 * 60;
    echo '<li>' . date('d/m/Y', $ascension) . '</li>';
}
echo '</ul>';
