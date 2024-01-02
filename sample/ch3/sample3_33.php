<?php
  // 처음 부분에 ^가 없으면 예를 들어 01000일 경우에는 01과 000으로 패턴을 나누어서 분석한다.
  // ^시작부터 숫자 3자리라는 의미임
  $reg = "/^[0-9]{2,3}-[0-9]{3,4}-[0-9]{4}/";
  
  echo $reg. "<br/>";
  echo preg_match($reg, "02-000-0000"). "<br/>";
  echo preg_match($reg, "011-000-1111"). "<br/>";
  echo preg_match($reg, "02-a00-0000"). "<br/>";
  echo preg_match($reg, "011-0001-0000"). "<br/>";
  echo preg_match($reg, "020000-0009-0000"). "<br/>";

?>