<?php
  // 연관성 배열
  // key 와 value 형태로 저장하기
  $person = Array(
    "1" => Array("name" => "홍길동", "age" => 23, "phone" => "010-1111-1111"),
    "2" => Array("name" => "임꺽정", "age" => 25, "phone" => "010-2222-2222"),
    "3" => Array("name" => "장길한", "age" => 27, "phone" => "010-3333-3333"),
    "4" => Array("name" => "임경업", "age" => 29, "phone" => "010-4444-4444")
  );

  // 데이터 추가하기
  $person['5'] = Array("name" => "홍경래", "age" => 31, "phone" => "010-5555-5555");

  // 하나의 요소에 접근하기
  echo $person['1']['name']. "<br/>";
  echo $person['1']['age']. "<br/>";
  echo $person['1']['phone']. "<br/>";
  
  echo $person['2']['name']. "<br/>";
  echo $person['2']['age']. "<br/>";
  echo $person['2']['phone']. "<br/>";

  foreach($person as $key => $value){
    echo "$key => ". $value['name']. " ". $value['age']. " ". $value['phone']. "<br/>";
  }

  print_r($person);
?>  