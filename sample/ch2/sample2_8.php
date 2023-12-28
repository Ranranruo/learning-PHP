<?php
    $x = $_GET['x'];
    $y = $_GET['y'];

    printf("%d > %d = %d<br>", $x, $y, $x > $y);
    printf("%d < %d = %d<br>", $x, $y, $x < $y);
    printf("%d <= %d = %d<br>", $x, $y, $x <= $y);
    printf("%d >= %d = %d<br>", $x, $y, $x >= $y);
    printf("%d == %d = %d<br>", $x, $y, $x == $y);
    printf("%d != %d = %d<br>", $x, $y, $x != $y);
?>