<?php
    $sentence = "'장미', '목단', '작약', '백일홍', '국화'";
    $result = addslashes($sentence);

    echo $result. "<br/>";

    // 문자열을 잘라서 배열로 전환시키기
    $sentence = "장미, 목단, 작약, 백일홍, 국화";
    $result = explode(",", $sentence);
    print_r($result);
    echo "<br/>";

    foreach($result as $key => $value){
        echo "$key $value <br/>";
    }
?>