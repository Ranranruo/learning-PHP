<?php
    $sentence = "Php is web programming language";
    
    // 문자열의 길이 알아내는 함수
    echo "문자열의 길이 ". strlen($sentence). "<br/>";

    // Php 추출 0번부터 시작해서 3개의 문자를 추출하라
    echo "문자열의 부분 추출". substr($sentence, 0, 3). "<br/>";
    // web 추출 7번부터 시작해서 3개의 문자를 추출하라
    echo "문자열의 부분 추출". substr($sentence, 7, 3). "<br/>";

    // 문자열이 있는 위치
    $pos = strpos($sentence, "programming");
    echo $pos. "<br/>";

    $result = str_replace($sentence, "Php", "PHP");
    echo $result. "<br/>";
?>