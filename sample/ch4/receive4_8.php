<?php
    $x = $_POST['x'];

    echo "배열크기 : ". count($x). "<br/>";

    foreach($x as $value){
        echo "$value<br/>";
    }
?>