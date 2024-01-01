<?php
  // 연관성 배열
  $persons = Array();
  array_push($persons, Array("name" => "홍길동", "age" => 23, "phone" => "010-1111-1111"));
  array_push($persons, Array("name" => "임꺽정", "age" => 25, "phone" => "010-2222-2222"));
  array_push($persons, Array("name" => "장길한", "age" => 27, "phone" => "010-3333-3333"));
  array_push($persons, Array("name" => "임경업", "age" => 29, "phone" => "010-4444-4444"));
  array_push($persons, Array("name" => "홍경래", "age" => 30, "phone" => "010-5555-5555"));

  echo "컬럼값들만 가져오기<br/>";
  $cloumn = array_column($persons, 'name');
  print "<pre>";
  print_r($cloumn);
  print "</pre>";

  $pos = array_search("임경업", $cloumn);
  if($pos){
    echo $persons[$pos]['name']. "&nbsp";
    echo $persons[$pos]['age']. "&nbsp";
    echo $persons[$pos]['phone']. "<br/>";
  }
  else
    echo "$key 를 찾을 수 없습니다.";
?>