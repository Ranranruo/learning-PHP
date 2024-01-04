<?php
    session_start();
    
    if(!isset($_SESSION['userid']))
        echo "세션이 등록되지 않았습니다.";
    else{
        echo $_SESSION['userid']. "<br/>";
        echo $_SESSION['username']. "<br/>";
        echo $_SESSION['email']. "<br/>";
    }
?>