<?php
    $name = rawurldecode($_GET['name']);
    $gender = rawurldecode($_GET['gender']);
    echo "name = $name<br/>";
    echo "gender = $gender<br/>";
?>