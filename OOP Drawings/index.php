<?php

include_once './Draw.php';

$drawer = new Draw(10);
$divider="<hr>";

$drawer->rectangular();
echo $divider;

$drawer->triangle();
echo $divider;

$drawer->reversedTriangle();
echo $divider;

$drawer->weirdTriangle();
echo $divider;

echo '<div style="border:1px solid #000; display:inline-block;">';
$drawer->chessboard();
echo '</div>';
echo $divider;

$drawer->christmastree();