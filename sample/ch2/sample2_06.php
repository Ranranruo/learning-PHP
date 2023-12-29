<?php
    $width = $_GET['width'];
    $height = $_GET['height'];

    $surface = $width * $height; #면적
    $perimeter = $width * 2 + $height * 2;

    echo "면적은 ". $surface. " 입니다.<br/>";
    echo "둘레는 ". $perimeter. " 입니다.<br/>"
?>