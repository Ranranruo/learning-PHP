<?php
    
    $age = $_GET['age'];

    if($age >= 19)
        echo '당신은 성인입니다.';
    else
        echo "당신은 미성년자 입니다."
?>