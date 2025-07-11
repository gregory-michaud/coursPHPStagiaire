<?php
$i = 3;
$message = match($i) {
    1 => '<p>un</p>',
    2, 3 => '<p>deux ou trois</p>',
    default => '<p>ni un ni deux ni trois</p>'
};
echo $message;