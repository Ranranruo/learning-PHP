<?php
    $name = "Hong Gil-dong";
    $gender = "M";

    $URL = "http://localhost:9000/sample/ch4/receive4_3.php?name=" . rawurlencode($name) . "&gender=" . $gender;
    echo $URL . "<br/>";
?>

<a href="<?= $URL ?>">Move</a>