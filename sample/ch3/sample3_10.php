<?php
    $Filename = "test.txt";

    // 1. strstr함수를 이용해서 확장자 찾기
    // strstr 함수는 앞에서부터 찾는다.
    echo strstr($Filename, '.'). "<br/>";

    // 2. strrchr함수를 사용해서 확장자 구하기
    // strrchr 함수는 뒤에서부터 찾는다.
    echo strrchr($Filename, '.'). "<br/>";

    // 확장자만 추출하기
    echo substr(strrchr($Filename, '.'), 1). "<br/>";

    // strrpos 함수와 substr 함수를 사용해서 확장자 구하기
    echo substr($Filename, strrpos($Filename, '.') + 1). "<br/>";

    $result = explode('.', $Filename);
    print_r($result);
    echo "<br/>". end($result). "<br/>";

    // 4 preg_replace 함수에 정규식을 대입해서 확장자 구하기
    echo preg_replace('/^.*\.([^.]+)$/D', '$1', $Filename). "<br/>";

    // pathinfo 함수를 사용해서 확장자 구하기
    echo pathinfo($Filename)['extension']. "<br/>";
?>