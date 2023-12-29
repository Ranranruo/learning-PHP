<?php
    $userid = $_GET['userid'];
    $password = $_GET['password'];

    if($userid != "test")
        echo "아이디가 잘못 되었습니다.<br/>";
    else
        echo "아이디가 일치합니다.<br/>";
    
    if($password != "1234")
        echo "패스워드가 일치하지 않습니다.<br/>";
    else
        echo "패스워드가 일치합니다.<br/>";

    if($userid == "test" && $password == "1234")
        echo "로그인 성공<br/>";
    else
        echo "로그인 실패<br/>";
?>