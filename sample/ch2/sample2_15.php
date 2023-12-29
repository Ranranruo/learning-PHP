<?php
    $member = $_GET['member'];

    $point = 0;

    // 회원에게만 + 10점을 한다.
    if($member == 1){
        $point = $point + 10;
    }

    echo "당신의 포인트는 현재 $point 입니다 <br/>"
?>