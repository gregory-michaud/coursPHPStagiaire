<?php
$a = 64;
$b = 42;

// Forme une seule instruction
if($a > $b)
    echo '<p>a est plus grand que b.</p>';
else
    echo '<p>a est plus petit ou égal à b.</p>';

// Forme "bloc"
if($a > $b) {
    echo '<p>a est plus grand que b.</p>';
    $b = $a;
} else {
    echo '<p>a est plus petit ou égal à b.</p>';
}

// Forme alternative
if($a !== $b):
    echo '<p>a et b ont des valeurs différentes.</p>';
else:
    echo '<p>a et b ont la même valeur.</p>';
endif;
