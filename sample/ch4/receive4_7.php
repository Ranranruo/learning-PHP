<?php
    $title = $_POST['title'];
    $writer = $_POST['writer'];
    $contents = $_POST['contents'];

    echo $title. "<br/>";
    echo $writer. "<br/>";
    echo "<br/><br/>--- nl2br 안썻을때 ---<br/><br/>";
    echo $contents. "<br/>";
    echo "<br/><br/>--- nl2br 썻을때 ---<br/><br/>";
    echo nl2br($contents);
?>