<?php
    $time = 0;
    echo "타임스탬프는 ". date("Y/m/d", 0). " 을 기점으로 합니다<br/>";

    $time = (50 * 365+12.5) * 24 * 60 * 60;
    echo "$time 은 ". date("Y/m/d", $time). "입니다 <br/>";

    $today = time();
    echo "$today<br/>";

    echo "오늘은 ". date("Y/m/d"). " 입니다<br/>";
    echo "오늘은 ". date("Y.m.d"). " 입니다<br/>";
    echo "오늘은 ". date("Y-m-d"). " 입니다<br/>";
    echo "오늘은 ". date("Y-m-d H:i:s"). " 입니다<br/>";
    echo "오늘은 ". date("l"). " 입니다<br/>"; // 오늘의 요일
?>