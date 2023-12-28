<?php
    $x = $_GET['x'];
    $y = $_GET['y'];

    printf("%d > 0 and %d > 0 의 결과 %d<br/>", $x, $y, $x > 0 and $y > 0);
    printf("%d > 0 or %d > 0 의 결과 %d<br/>", $x, $y, $x > 0 or $y > 0);
    printf("not %d > 0 의 결과 %d<br/>", $x, !($x > 0));
    printf("%d > 0 and %d > 0 의 결과 %d<br/>", $x, $y, $x > 0 xor $y > 0);
?>