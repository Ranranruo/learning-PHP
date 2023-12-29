<?php
    $colors = array("red", "green", "blue", "yellow");

    echo "<br/><br/>";

    print_r($colors);
    echo "<br/><br/>";

    echo count($colors);
    echo "<br/><br/>";

    $colors2 = array_slice($colors, 2, 3);
    print_r($colors2);

?>