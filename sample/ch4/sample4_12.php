<?php
    if(!isset($_COOKIE['mycookie']))
        echo "mycookie 라는 이름의 쿠키는 아직 생성되지 않았습니다.";
    else{
        echo $_COOKIE['mycookie']. "<br/>";
        echo $_COOKIE['name']. "<br/>";
        echo $_COOKIE['age']. "<br/>";
    }
?>  