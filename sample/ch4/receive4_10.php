<?php
    // isset 변수가 설정이 되어 있으면 true 없으면 false를 반환
    if(isset($_POST['submit1']))
        echo "submit1버튼이 눌림<br/>";
    else if(isset($_POST['submit2']))
        echo "submit2버튼이 눌림<br/>";
    else if(isset($_POST['submit3']))
        echo "submit3버튼이 눌림<br/>";
    else
        echo "알 수 없습니다";
?>