<?php
    echo "두 날짜 사이의 간격<br/>";

    $date1 = "2022-06-25";
    $date2 = "2022-06-30";

    $oneday_sec = 24 * 60 * 60; // 하루를 초로 나타냄
    $diff = strtotime($date2) - strtotime($date1); // 초로 나온다
    echo "$date1 ~ $date2 = ". str_replace("-", '', $diff / $oneday_sec). "<br/>";

    echo "오늘부터 이달 말일까지의 남은 일수 구하기<br/>";
    $today = date("Y-m-d");
    $lastday = date("Y-m-t");
    
    $diff = strtotime($lastday) - strtotime($today); // 초로 나온다
    echo "$lastday ~ $today = ". $diff / $oneday_sec. "<br/>";
?>