<?php
$a = 64;
$b = 42;

// Forme une seule instruction
if($a > $b)
    echo '<p>a est plus grand que b.</p>';
elseif($a < $b)
    echo '<p>a est plus petit que b.</p>';
else
    echo '<p>a est égal à b.</p>';

// Forme "bloc"
if($a > $b) {
    echo '<p>a est plus grand que b.</p>';
    $b = $a;
} elseif($a < $b) {
    echo '<p>a est plus petit que b.</p>';
} else {
    echo '<p>a est égal à b.</p>';
}

// Forme alternative
if($a > $b):
    echo '<p>a est plus grand que b.</p>';
elseif($a < $b):
    echo '<p>a est plus petit que b.</p>';
else:
    echo '<p>a est égal à b.</p>';
endif;

// Forme alternative mêlant PHP et HTML
?>

<?php if ($a > $b): ?>
    <p>a est plus grand que b</p>
<?php elseif ($a == $b): ?>
    <p>a est égal à b</p>
<?php else: ?>
    <p>a est plus petit que b</p>
<?php endif; ?>
