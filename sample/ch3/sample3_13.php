<?php
    echo "<br/><br/>";
    $base_date = "2020-07-05"; // 기준이 되는 날짜
    $timedate = strtotime($base_date); // 문자열을 컴퓨터가 인식할 수 있는 시간 형식으로 변환


    echo "기준일자 : $base_date <br/>";
    echo "기준일자의 타임스탬프 ". $timedate. "<br/>";
    
    echo "기준일자의 하루후 ". date("Y-m-d", strtotime($base_date. "+1 day")). "<br/>";
    echo "기준일자의 하루전 ". date("Y-m-d", strtotime($base_date. "-1 day")). "<br/>";
    echo "기준일자의 일주후 ". date("Y-m-d", strtotime("$base_date +7day")). "<br/><br/>";

    echo "기준일자의 일주후 ". date("Y-m-d", strtotime('7day', $timedate)). "<br/><br/>";
    
    echo "오늘 : ". date("Y-m-d", time()). "<br/>";
    echo date("Y-m-d", strtotime("-1day", time())). " 하루 전(어제)<br/>";
    echo date("Y-m-d", strtotime("now", time())). " 현재<br/>";
    echo date("Y-m-d", strtotime("+1day", time())). " 하루 후(내일)<br/>";
    echo date("Y-m-d", strtotime("+1week", time())). " 일주일 후<br/>";
    echo date("Y-m-d", strtotime("-1month", time())). " 한달 전<br/>";
    echo date("Y-m-d", strtotime("+1month", time())). " 한달 후<br/>";
    echo date("Y-m-d", strtotime("+6month", time())). " 6달 후<br/>";
    echo date("Y-m-d", strtotime("+12month", time())). " 12달 후<br/>";
    echo date("Y-m-d", strtotime("next Thursday", time())). " 다음주 목요일<br/>";
    echo date("Y-m-d", strtotime("last Monday", time())). " 지난주 월요일<br/>";
    echo date("Y-m-d", strtotime("10 September 2000", time())). " 2000년 9월 10일<br/>";

    
?>