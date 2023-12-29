<?php
    $select = $_GET['select'];

    if($select == "1")
        echo "축하합니다 아이팟에 당첨되었습니다.<br/>";
    else if($select == "2")
        echo "축하합니다. 제주도 2박3일 여행권에 당첨되었습니다.<br/>";
    else if($select == "3")
        echo "축하합니다. 핸드 선풍기에 당첨되셨습니다.<br/>";
    else
        echo "안탑깝지만 다음 기회에";
?>